document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll('body, .reveal');

    elements.forEach((el, index) => {
        setTimeout(() => {
            el.style.opacity = "1";
            el.style.transform = "translateY(0)";
            el.style.transition = "all 0.6s ease-out";
        }, index * 150); // Each item appears 150ms after the previous one
    });
});
document.addEventListener("DOMContentLoaded", () => {
    // --- 1. Sequential Reveal Animation (Existing Logic Optimized) ---
    const elements = document.querySelectorAll('body, .reveal');

    elements.forEach((el, index) => {
        // Use requestAnimationFrame for smoother initial rendering
        requestAnimationFrame(() => {
            setTimeout(() => {
                el.style.opacity = "1";
                el.style.transform = "translateY(0)";
                el.style.transition = "all 0.6s ease-out";
            }, index * 100); // Reduced delay slightly for snappier feel
        });
    });

    // --- 2. Image Lazy Loading Optimization ---
    // This prevents loading images that aren't on screen yet, saving bandwidth
    const lazyImages = document.querySelectorAll('img');
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const image = entry.target;
                    // If you use data-src for high-res images, swap them here
                    if (image.dataset.src) {
                        image.src = image.dataset.src;
                    }
                    image.classList.add('fade-in');
                    observer.unobserve(image);
                }
            });
        });

        lazyImages.forEach(img => imageObserver.observe(img));
    }

    // --- 3. Optimized Scroll Handling (Debouncing) ---
    // Prevents performance lag during heavy scrolling
    let isScrolling;
    window.addEventListener('scroll', () => {
        window.clearTimeout(isScrolling);
        isScrolling = setTimeout(() => {
            // Add logic here for elements that should trigger on scroll
            console.log('Scrolling settled - performing heavy tasks...');
        }, 66); // Roughly 15fps equivalent for check-ins
    }, { passive: true }); // 'passive: true' improves scroll performance
});

// --- 4. Predictive Prefetching ---
// Prefetches the registration page when the user hovers over the button
const registerLink = document.querySelector('a[href*="register.php"]');
if (registerLink) {
    registerLink.addEventListener('mouseenter', () => {
        const link = document.createElement('link');
        link.rel = 'prefetch';
        link.href = registerLink.href;
        document.head.appendChild(link);
    }, { once: true });
}

document.addEventListener("DOMContentLoaded", () => {
    // --- Optimized Scroll-to-Reveal Logic ---
    const revealElements = document.querySelectorAll('.reveal');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add a small delay based on index if multiple items appear at once
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";
                entry.target.style.transition = "all 0.8s ease-out";
                revealObserver.unobserve(entry.target); // Animation only happens once
            }
        });
    }, {
        threshold: 0.1 // Trigger when 10% of the element is visible
    });

    revealElements.forEach(el => {
        // Set initial state via JS to prevent flickering
        el.style.opacity = "0";
        el.style.transform = "translateY(30px)";
        revealObserver.observe(el);
    });

    // --- Dynamic Mobile Viewport Height Fix ---
    // Fixes the 100vh issue on mobile browsers (where address bars hide content)
    const setVh = () => {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    };

    window.addEventListener('resize', setVh);
    setVh();
});

/**
 * Optimized Script for Performance and Responsiveness
 */
document.addEventListener("DOMContentLoaded", () => {
    // --- 1. Efficient Reveal Animations (Intersection Observer) ---
    // Instead of using loops and timeouts on page load, this only triggers when visible.
    const revealElements = document.querySelectorAll('.reveal');

    const revealOptions = {
        threshold: 0.15, // Trigger when 15% of the element is visible
        rootMargin: "0px 0px -50px 0px" // Trigger slightly before it enters the viewport
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Use requestAnimationFrame for hardware-accelerated animations
                requestAnimationFrame(() => {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                    entry.target.style.transition = "all 0.6s cubic-bezier(0.2, 0.8, 0.2, 1)";
                });
                observer.unobserve(entry.target); // Stop observing once animated
            }
        });
    }, revealOptions);

    revealElements.forEach(el => {
        el.style.opacity = "0";
        el.style.transform = "translateY(20px)";
        revealObserver.observe(el);
    });

    // --- 2. Smart Image Optimization (Lazy Loading) ---
    // Optimizes loading for images, specifically helpful for the prize and gallery pages.
    const images = document.querySelectorAll('img');
    if ('IntersectionObserver' in window) {
        const imgObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    // Switch data-src to src if you implement high-res placeholders
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                    }
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });
        images.forEach(img => imgObserver.observe(img));
    }

    // --- 3. Resource Pre-fetching ---
    // Prefetches the registration page when a user hovers over any link to it.
    const prefetchLinks = document.querySelectorAll('a[href*="register.php"]');
    prefetchLinks.forEach(link => {
        link.addEventListener('mouseenter', () => {
            const prefetch = document.createElement('link');
            prefetch.rel = 'prefetch';
            prefetch.href = link.href;
            document.head.appendChild(prefetch);
        }, { once: true });
    });

    // --- 4. Throttled Scroll Events ---
    // Prevents performance drops during scrolling by limiting execution rate.
    let scrollTimeout;
    window.addEventListener('scroll', () => {
        if (!scrollTimeout) {
            scrollTimeout = setTimeout(() => {
                scrollTimeout = null;
                // Place any scroll-dependent logic here (e.g., sticky navbar updates)
            }, 50); // Limits execution to 20 times per second
        }
    }, { passive: true });
});