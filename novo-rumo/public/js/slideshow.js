document.addEventListener("DOMContentLoaded", () => {
    // Slideshow das imagens
    const slides = document.querySelectorAll(".background-slideshow img");
    let current = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle("active", i === index);
        });
    }

    showSlide(current);

    setInterval(() => {
        current = (current + 1) % slides.length;
        showSlide(current);
    }, 5000);

    // Footer: aparece sozinho e some depois de 6 segundos
    const footer = document.querySelector('.site-footer');

    function showFooter() {
        footer.classList.add('visible');
        setTimeout(() => {
            footer.classList.remove('visible');
        }, 6000);
    }

    // Aparece após 2 segundos e some depois de 6
    setTimeout(showFooter, 2000);
});
