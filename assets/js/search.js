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