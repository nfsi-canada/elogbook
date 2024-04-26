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

$sID = $_GET["sID"];   
$sName = $_GET["sName"];  
$cID = $_GET["cID"];  
$dpName = $_GET["dpName"];  
$apName = $_GET["apName"];  
$disc = $_GET["disc"];  
$start = $_GET["start"];  
$end = $_GET["end"];  

echo $sID . "<br>";
echo $sName  . "<br>";
echo $cID  . "<br>";
echo $dpName  . "<br>";
echo $apName  . "<br>";
echo $disc  . "<br>";
echo $start  . "<br>";
echo $end  . "<br>";

foreach($_GET['checkbox'] as $checkbox){
    echo $checkbox . ' <br>';
}


echo "<p>BEGIN LOG INSERT</p><br>";

echo "<p>END LOG INSERT</p><br>";

echo "<p>BEGIN INSTRUMENTS INSERT LOOP</p><br>"; 

echo "<p>END INSTRUMENTS INSERT LOOP</p><br>";

$mysqli->close();

?>