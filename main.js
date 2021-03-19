document.querySelector(".menu-btn").addEventListener("click", () => {
    document.querySelector(".nav-menu").classList.toggle("show")
});

ScrollReveal().reveal('.filos');
ScrollReveal().reveal('.video', {delay: 500});