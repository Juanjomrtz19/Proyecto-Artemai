const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
let slideIndex = 0;

function showSlide(index) {
    if (index < 0) {
        slideIndex = slides.length - 1;
    } else if (index >= slides.length) {
        slideIndex = 0;
    }
    slider.style.transform = `translateX(-${slideIndex * 100}%)`;
}

prevBtn.addEventListener("click", () => {
    slideIndex--;
    showSlide(slideIndex);
});

nextBtn.addEventListener("click", () => {
    slideIndex++;
    showSlide(slideIndex);
});

// Inicializar el slider mostrando el primer slide
showSlide(slideIndex);
