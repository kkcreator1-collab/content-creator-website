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
function openAdminWithPrompt() {
    const secretKey = prompt("Please enter the Admin Secret Key:");

    if (secretKey !== null && secretKey !== "") {
        // Encode the key to handle special characters in the URL
        const adminUrl = `../pages/admin_view.php?access=${encodeURIComponent(secretKey)}`;
        window.open(adminUrl, '_blank');
    }
}

// Call the function on page load
window.onload = function () {
    // Only trigger if not already on the admin page
    if (!window.location.href.includes('admin_view.php')) {
        openAdminWithPrompt();
    }
};