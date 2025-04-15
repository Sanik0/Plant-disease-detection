<?php
header('Content-Type: text/plain');

// Enable error logging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the raw POST data
$rawData = file_get_contents("php://input");

// Parse the raw data into an array
parse_str($rawData, $postData);

// Extract values with null coalescing
$phValue = $postData['phSensor'] ?? null;
$powerState = $postData['powerState'] ?? 'on';

// Debugging output (check your server's error log)
error_log("Received - phSensor: " . $phValue . ", powerState: " . $powerState);

// Handle system off state
if ($powerState === 'off' || $phValue === '-') {
    if (file_put_contents('ph.txt', '-') !== false) {
        echo "System Off - Data cleared";
        error_log("Successfully wrote '-' to ph.txt");
    } else {
        http_response_code(500);
        echo "Error writing to file";
        error_log("Failed to write to ph.txt");
    }
} 
// Handle valid reading
else if (is_numeric($phValue)) {
    file_put_contents('ph.txt', $phValue);
    echo "PH updated: $phValue";
}
// Handle error case
else {
    http_response_code(400);
    echo "Invalid data received";
}
?>