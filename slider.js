// this is for image slider 
const slider = document.getElementById('slider');
const slides = slider.children;
let currentIndex = 0;

document.getElementById('prev').addEventListener('click', () => {
    currentIndex = (currentIndex === 0) ? slides.length - 1 : currentIndex - 1;
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
});

document.getElementById('next').addEventListener('click', () => {
    currentIndex = (currentIndex === slides.length - 1) ? 0 : currentIndex + 1;
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
});

//search
const searchTrigger = document.querySelector('.search-trigger');
const searchInput = document.querySelector('.search-input');
const searchClose = document.querySelector('.search-close');

searchTrigger.addEventListener('click', (e) => {
    e.stopPropagation();
    searchInput.classList.toggle("active");
});

searchInput.addEventListener('click', (e) => {
    e.stopPropagation();
});

searchClose.addEventListener('click', (e) => {
    e.stopPropagation();
    searchInput.classList.remove("active");
});

document.addEventListener('click', () => {
    searchInput.classList.remove("active");
});

