<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Debug: print raw POST data
    $rawData = file_get_contents("php://input");
    parse_str($rawData, $postData);

    if (isset($postData['tempSensor'])) {
        $temp = $postData['tempSensor'];
        echo "Temperature received: $temp";
    } else {
        echo "No temperature value received.";
    }
} else {
    echo "Only POST method is accepted.";
}
?>
