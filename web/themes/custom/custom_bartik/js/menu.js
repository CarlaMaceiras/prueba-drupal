document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.querySelector('.hamburger');
    const menu = document.querySelector('.hamburguer-menu');

    hamburger.addEventListener('click', function () {
        menu.classList.toggle('active');
        const isMenuVisible = menu.classList.contains('active');
        menu.setAttribute('aria-hidden', !isMenuVisible);
        hamburger.setAttribute('aria-expanded', isMenuVisible);
    });
});
