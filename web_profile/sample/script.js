let events = {};  // Store events in the format { date: { time: { title, color }, ... }, ... }
let selectedDate = '';  // Store the selected date for adding events

// Function to generate and display the calendar
function generateCalendar() {
    const calendar = document.getElementById('calendar');
    const now = new Date();
    const month = now.getMonth(); // Current month (0-based)
    const year = now.getFullYear(); // Current year
    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);
    const totalDays = lastDay.getDate(); // Total days in the month

    let html = '<div class="calendar-grid">';
    
    // Add day names (Sun, Mon, etc.)
    const dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    dayNames.forEach(day => {
        html += `<div class="day">${day}</div>`;
    });

    // Add empty slots for the first days of the previous month
    for (let i = 0; i < firstDay.getDay(); i++) {
        html += '<div class="day"></div>';
    }

    // Add days for the current month
    for (let day = 1; day <= totalDays; day++) {
        const dateStr = `${year}-${month + 1}-${day}`; // Format date as YYYY-MM-DD
        const hasEvent = events[dateStr] ? true : false;
        const eventColor = hasEvent ? events[dateStr][Object.keys(events[dateStr])[0]].color : null;

        html += `
            <div class="day ${hasEvent ? 'event-with-event' : ''}" style="background-color: ${eventColor || '#f0f2f5'}" onclick="selectDate('${dateStr}')">
                ${day}
                <div class="event-list-day" style="background-color: ${eventColor || '#ffffffcc'};">
                    ${hasEvent ? renderEvents(dateStr) : ''}
                </div>
            </div>
        `;
    }

    html += '</div>';
    calendar.innerHTML = html;
}

// Function to render events for a given date
function renderEvents(date) {
    const eventEntries = Object.entries(events[date]);
    return eventEntries.map(([time, { title, color }]) => {
        return `<div class="event-time" style="background-color: ${color}">${time}: ${title}</div>`;
    }).join('');
}

// Function to select a date for adding events
function selectDate(date) {
    selectedDate = date;
    document.getElementById('event-title').focus(); // Focus on event title input
}

// Function to add an event for the selected date
function addEvent() {
    const title = document.getElementById('event-title').value;
    const time = document.getElementById('event-time').value;
    const color = document.getElementById('event-color').value;  // Get the selected color

    if (selectedDate && title && time && color) {
        if (!events[selectedDate]) {
            events[selectedDate] = {};  // Initialize an empty object for the selected date
        }

        // Add the event with its color to the selected date
        events[selectedDate][time] = { title, color };

        // Clear the form inputs
        document.getElementById('event-title').value = '';
        document.getElementById('event-time').value = '';

        // Regenerate the calendar to display the event
        generateCalendar();

        // Update the event list for the selected date
        displayEventList();
    } else {
        alert('Please fill all fields');
    }
}

// Function to display events in the event list
function displayEventList() {
    const eventList = document.getElementById('event-list');
    eventList.innerHTML = '';  // Clear the existing event list
    const selectedDateEvents = events[selectedDate];

    if (selectedDateEvents) {
        for (let [time, { title, color }] of Object.entries(selectedDateEvents)) {
            const li = document.createElement('li');
            li.style.backgroundColor = color;
            li.innerHTML = `${time}: ${title}`;
            eventList.appendChild(li);
        }
    }
}

// Initialize the calendar on page load
window.onload = () => {
    generateCalendar();
};


function addEvent() {
    const title = document.getElementById('event-title').value;
    const time = document.getElementById('event-time').value;
    const color = document.getElementById('event-color').value;  // Get the selected color

    if (selectedDate && title && time && color) {
        if (!events[selectedDate]) {
            events[selectedDate] = {};  // Initialize an empty object for the selected date
        }

        // Add the event with its color to the selected date
        events[selectedDate][time] = { title, color };

        // Clear the form inputs
        document.getElementById('event-title').value = '';
        document.getElementById('event-time').value = '';

        // Send the updated events to the server via AJAX
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "save_events.php", true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.send(JSON.stringify(events));

        // Regenerate the calendar to display the event
        generateCalendar();

        // Update the event list for the selected date
        displayEventList();
    } else {
        alert('Please fill all fields');
    }
}
