document.addEventListener("DOMContentLoaded", () => {
    // --- 1. Optimized Sequential Reveal Animation ---
    // Combines reveal logic to ensure elements appear smoothly once
    const elements = document.querySelectorAll('body, .reveal');

    elements.forEach((el, index) => {
        requestAnimationFrame(() => {
            setTimeout(() => {
                el.style.opacity = "1";
                el.style.transform = "translateY(0)";
                el.style.transition = "all 0.6s ease-out";
            }, index * 100); // 100ms staggered delay
        });
    });

    // --- 2. Image Lazy Loading Optimization ---
    const lazyImages = document.querySelectorAll('img');
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                    }
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });
        lazyImages.forEach(img => imageObserver.observe(img));
    }

    // --- 3. Resource Pre-fetching ---
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
    let scrollTimeout;
    window.addEventListener('scroll', () => {
        if (!scrollTimeout) {
            scrollTimeout = setTimeout(() => {
                scrollTimeout = null;
            }, 50); // Limits execution to 20 times per second
        }
    }, { passive: true });

    // --- 5. Footer Current Year Update ---
    const yearSpan = document.getElementById('current-year');
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }
});