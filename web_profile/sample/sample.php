<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Responsive Calendar Scheduler</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="calendar-container">
            <div id="calendar"></div>
        </div>

        <div class="event-form">
            <h3>Add Event</h3>
            <input type="time" id="event-time" required>
            <input type="text" id="event-title" placeholder="Event Title" required>
            <label for="event-color">Choose Event Color:</label>
            <input type="color" id="event-color" value="#007bff">
            <button onclick="addEvent()">Add Event</button>
        </div>

        <div class="event-list">
            <h3>Scheduled Events</h3>
            <ul id="event-list"></ul>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
