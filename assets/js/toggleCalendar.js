function toggleCalendar() {
    const calendar = document.getElementById('calendar');
    calendar.classList.toggle('hidden');
}

document.getElementById('calendar').addEventListener('click', e => {
    e.stopPropagation();
})

const btns = document.querySelectorAll('.calendarBtn');
console.log(btns);


btns.forEach(btn => {
    btn.addEventListener('click', e => {
        e.preventDefault();
        e.stopPropagation();
    })
})