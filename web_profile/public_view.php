<?php
// Read the events data from the events.json file
$events = json_decode(file_get_contents('sample/events.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Calendar</title>

     <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css"/>
    <link href="css/tooplate-little-fashion.css" rel="stylesheet">
    <link rel="stylesheet" href="sample/styles.css">

</head>
<body>

<?php require 'templates/nav/nav.php';?>

    <div class="container">
        <div class="calendar-container">
            <div id="calendar"></div>
        </div>

        <div class="event-list">
            <h3>Scheduled Events</h3>
            <ul id="event-list"></ul>
        </div>
    </div>

    <script>
        // Event data from PHP
        const events = <?php echo json_encode($events); ?>;

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
                    <div class="day ${hasEvent ? 'event-with-event' : ''}" style="background-color: ${eventColor || '#f0f2f5'}">
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

        // Initialize the calendar on page load
        window.onload = () => {
            generateCalendar();
        };
    </script>




    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src=".js/slick.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/calendar_script.js"></script>
    <script src="sample/script.js"></script>
</body>
</html>
