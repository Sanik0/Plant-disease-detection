<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header('Content-Type: text/plain');

$phValue = @file_get_contents('ph.txt') ?: '-';

// If file contains "-" (system off) or doesn't exist
if ($phValue === '-') {
    echo "-";
} else {
    echo $phValue;
}
?>