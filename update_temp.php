<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rawData = file_get_contents("php://input");
    parse_str($rawData, $postData);

    if (isset($postData['tempSensor'])) {
        $temp = $postData['tempSensor'];
        file_put_contents('temperature.txt', $temp); // Save to file
        echo "Temperature saved: $temp";
    } else {
        echo "No temperature value received.";
    }
} else {
    echo "Only POST method is accepted.";
}