document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".mac-menu");
    const darkModeButton = document.querySelector(".theme-toggle");

    if (menuToggle) {
        menuToggle.addEventListener("click", function () {
            menu.classList.toggle("active");
        });
    }

    function toggleDarkMode() {
        document.body.classList.toggle('dark-mode');

        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem("theme", "dark");
            if (darkModeButton) darkModeButton.textContent = '☀️';
        } else {
            localStorage.setItem("theme", "light");
            if (darkModeButton) darkModeButton.textContent = '🌙';
        }
    }

    if (darkModeButton) {
        darkModeButton.addEventListener("click", toggleDarkMode);
    }

    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-mode");
        if (darkModeButton) darkModeButton.textContent = '☀️';
    } else {
        if (darkModeButton) darkModeButton.textContent = '🌙';
    }

    // Deixar a função global se quiser usar onclick no HTML
    window.toggleDarkMode = toggleDarkMode;
});
