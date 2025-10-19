const btnMenuToggle = document.getElementById("menu-toggle");
const divListOptionsMenu = document.getElementById("list-options-menu");

const track = document.getElementById("slides");
const slides = document.querySelectorAll(".slide");
const prevBtn = document.querySelector(".left-arrow");
const nextBtn = document.querySelector(".right-arrow");

let currentSlide = 0;
const total = slides.length;


btnMenuToggle.addEventListener("click", () => {
    divListOptionsMenu.classList.toggle("active")
});

// deslizar a índice
function goTo(index) {
    currentSlide = (index + total) % total;
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
}

// botones
prevBtn.addEventListener("click", () => goTo(currentSlide - 1));
nextBtn.addEventListener("click", () => goTo(currentSlide + 1));

// autoplay (opcional)
let timer = setInterval(() => goTo(currentSlide + 1), 5000);

// inicio
goTo(0);