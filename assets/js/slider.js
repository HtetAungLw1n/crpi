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



