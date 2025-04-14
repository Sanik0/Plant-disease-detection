<?php
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");

echo @file_get_contents('ph.txt') ?: 'N/A';
?>