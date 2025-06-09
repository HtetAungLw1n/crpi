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

// Mobile menu open/close with animation
const mobileMenuBtn = document.getElementById("mobile-menu-btn");
const mobileMenu = document.getElementById("mobile-menu");
const mobileMenuPanel = document.getElementById("mobile-menu-panel");
const closeMobileMenu = document.getElementById("close-mobile-menu");

function openMobileMenu() {
    mobileMenu.classList.remove("hidden");
    setTimeout(() => {
        mobileMenuPanel.classList.remove("translate-x-full");
    }, 10);
}

function closeMobileMenuFn() {
    mobileMenuPanel.classList.add("translate-x-full");
    setTimeout(() => {
        mobileMenu.classList.add("hidden");
    }, 300);
}

mobileMenuBtn.addEventListener("click", openMobileMenu);
closeMobileMenu.addEventListener("click", closeMobileMenuFn);
mobileMenu.addEventListener("click", (e) => {
    if (e.target === mobileMenu) closeMobileMenuFn();
});

// Dropdown toggles
const programsToggle = document.getElementById("mobile-programs-toggle");
const programsDropdown = document.getElementById(
    "mobile-programs-dropdown"
);
programsToggle.addEventListener("click", () => {
    programsDropdown.classList.toggle("hidden");
});

const publicationsToggle = document.getElementById(
    "mobile-publications-toggle"
);
const publicationsDropdown = document.getElementById(
    "mobile-publications-dropdown"
);
publicationsToggle.addEventListener("click", () => {
    publicationsDropdown.classList.toggle("hidden");
});