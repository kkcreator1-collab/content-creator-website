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