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