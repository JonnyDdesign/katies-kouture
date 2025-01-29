document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.querySelector('.mobile-menu');
    const closeMenu = document.querySelector('.close-menu');

    // Open mobile menu
    hamburger.addEventListener('click', function() {
        mobileMenu.classList.toggle('active');
    });

    // Close mobile menu
    closeMenu.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
    });
});