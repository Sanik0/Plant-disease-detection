<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rawData = file_get_contents("php://input");
    parse_str($rawData, $postData);

    if (isset($postData['humiditySensor'])) {
        $humiditySensor = $postData['humiditySensor'];
        file_put_contents('humidity.txt', $humiditySensor); // Save to file
        echo "Humidity saved: $humiditySensor";
    } else {
        echo "No Humidity value received.";
    }
} else {
    echo "Only POST method is accepted.";
}