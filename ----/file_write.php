<?php
header("Access-Control-Allow-Origin: *");
$path = 'text.json';
$jsonData=$_POST;

// Convert JSON data from an array to a string
$jsonString = json_encode($jsonData, JSON_PRETTY_PRINT);
// Write in the file
$fp = fopen($path, 'w');
fwrite($fp, $jsonString);
fclose($fp);




?>