<?php
// save_events.php

// Get the raw POST data from the request
$events = file_get_contents('php://input');

// Save it to the events.json file
file_put_contents('events.json', $events);
?>
