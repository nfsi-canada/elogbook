<?php

$host = "localhost";
$username= "root";
$user_pass = "usbw";
$data_base_in_use = "sakila";

$mysqli = new mysqli($host, $username, $user_pass, $data_base_in_use);

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}

echo "<p>TESTING</p>";

$author = $_GET["author"];  
$date = $_GET["date"];  
$time = $_GET["time"];  
$disc = $_GET["disc"];  

echo $author . "<br>";
echo $date  . "<br>";
echo $time  . "<br>";
echo $disc  . "<br>";


$mysqli->close();

?>