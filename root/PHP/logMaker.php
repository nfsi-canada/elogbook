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

$author = $_GET["author"];   
$date = $_GET["date"];  
$time = $_GET["time"];  
$disc = $_GET["disc"];  
$c_id = $_GET["CID"];  
$type = $_GET["type"];  

$sql = "SET FOREIGN_KEY_CHECKS=0;";

if ($mysqli->query($sql) === TRUE) {

  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }

$sql = "INSERT INTO logs (date, time, type, text, Cruise_c_id, Crew_crew_name1, Crew_Cruise_c_id1)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt= $mysqli->prepare($sql);

$stmt->bind_param("ssssisi", $date, $time, $type, $disc, $c_id, $author, $c_id);

$stmt->execute();

$sql = "SELECT * FROM `logs` ORDER BY `log_id` DESC LIMIT 1";
$result = $mysqli->query($sql);
$row = mysqli_fetch_array($result);
$newID = $row['log_id'];

foreach($_GET['checkbox'] as $checkbox){
    $sql = "INSERT INTO logs_has_instruments (logs_log_id, Instruments_ins_name) VALUES (?, ?)";
    $stmt= $mysqli->prepare($sql);
    $stmt->bind_param("is", $newID, $checkbox);
    $stmt->execute();
}

$sql = "SET FOREIGN_KEY_CHECKS=1;";

if ($mysqli->query($sql) === TRUE) {
    
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }

$mysqli->close();

$c_name = $_GET["CNAME"]; 

header("Location: ../logs.php?CID=$c_id&CNAME=%24$cname");

?>