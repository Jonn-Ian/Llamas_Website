// calendar_script.js

const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
const daysInMonth = (month, year) => new Date(year, month + 1, 0).getDate();
const firstDayOfMonth = (month, year) => new Date(year, month, 1).getDay();

let currentDate = new Date();
let selectedDate = null;
let events = [];

document.addEventListener("DOMContentLoaded", () => {
    renderCalendar();
    document.querySelector(".prev-month").addEventListener("click", prevMonth);
    document.querySelector(".next-month").addEventListener("click", nextMonth);
    document.querySelector(".event-modal .close-modal").addEventListener("click", closeModal);
    document.querySelector("#event-form").addEventListener("submit", saveEvent);
});

function renderCalendar() {
    const month = currentDate.getMonth();
    const year = currentDate.getFullYear();
    document.querySelector(".month-year").innerText = `${monthNames[month]} ${year}`;

    const daysGrid = document.querySelector(".days");
    daysGrid.innerHTML = "";

    const firstDay = firstDayOfMonth(month, year);
    const daysCount = daysInMonth(month, year);

    // Empty days before the first day of the month
    for (let i = 0; i < firstDay; i++) {
        const emptyDay = document.createElement("div");
        emptyDay.classList.add("day");
        daysGrid.appendChild(emptyDay);
    }

    // Days of the month
    for (let i = 1; i <= daysCount; i++) {
        const day = document.createElement("div");
        day.classList.add("day");
        day.textContent = i;
        day.addEventListener("click", () => openEventModal(i));
        daysGrid.appendChild(day);
    }

    // Add events to the calendar
    events.forEach(event => {
        const eventDay = document.querySelectorAll(".day")[event.date - 1];
        if (eventDay) {
            eventDay.classList.add("event-day");
            eventDay.title = `${event.title}: ${event.description}`;
        }
    });
}

function prevMonth() {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
}

function nextMonth() {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
}

function openEventModal(day) {
    selectedDate = day;
    document.querySelector(".event-modal").style.display = "block";
}

function closeModal() {
    document.querySelector(".event-modal").style.display = "none";
}

function saveEvent(e) {
    e.preventDefault();
    const title = document.querySelector("#event-title").value;
    const description = document.querySelector("#event-description").value;

    if (title && description) {
        events.push({ date: selectedDate, title, description });
        closeModal();
        renderCalendar();
    } else {
        alert("Please fill out both fields.");
    }
}
