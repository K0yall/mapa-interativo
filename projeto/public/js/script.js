// script.js
document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".mac-menu");

    menuToggle.addEventListener("click", function () {
        menu.classList.toggle("active");
    });
});
