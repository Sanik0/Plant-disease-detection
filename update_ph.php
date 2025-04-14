<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rawData = file_get_contents("php://input");
    parse_str($rawData, $postData);

    if (isset($postData['phSensor'])) {
        $phSensor = $postData['phSensor'];
        file_put_contents('ph.txt', $phSensor); // Save to file
        echo "Ph Level saved: $phSensor";
    } else {
        echo "No Ph Level value received.";
    }
} else {
    echo "Only POST method is accepted.";
}