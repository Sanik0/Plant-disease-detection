<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rawData = file_get_contents("php://input");
    parse_str($rawData, $postData);

    if (isset($postData['moistureSensor'])) {
        $moist = $postData['moistureSensor'];
        file_put_contents('moisture.txt', $moist); // Save to file
        echo "Soil Moisture saved: $moist";
    } else {
        echo "No Soil Moisture value received.";
    }
} else {
    echo "Only POST method is accepted.";
}