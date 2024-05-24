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

$sID = $_GET["sID"];   
$sName = $_GET["sName"];  
$cName = $_GET["cID"];  
$dpName = $_GET["dpName"];  
$apName = $_GET["apName"];  
$disc = $_GET["disc"];  
$start = $_GET["start"];  
$end = $_GET["end"];  

$sql = "SET FOREIGN_KEY_CHECKS=0;";

if ($mysqli->query($sql) === TRUE) {

} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$sql = "INSERT INTO cruise (c_name, s_id, s_name, ap_name, dp_name, location, s_date, e_date)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt= $mysqli->prepare($sql);

$stmt->bind_param("sissssss", $cName, $sID, $sName, $apName, $dpName, $disc, $start, $end);

$stmt->execute();

$sql = "SELECT * FROM `cruise` ORDER BY `c_id` DESC LIMIT 1";
$result = $mysqli->query($sql);
$row = mysqli_fetch_array($result);
$newID = $row['c_id'];

foreach($_GET['checkbox'] as $checkbox){
    $sql = "INSERT INTO cruise_has_instruments (Cruise_c_id, Instruments_ins_name) VALUES (?, ?)";
    $stmt= $mysqli->prepare($sql);
    $stmt->bind_param("is", $newID, $checkbox);
    $stmt->execute();
        
    // $sql = "INSERT INTO instruments (ins_name) VALUES (?)";
    // $stmt= $mysqli->prepare($sql);
    // $stmt->bind_param("s",$checkbox);
    // $stmt->execute();
}

// COMPLEATLY REMOVE INSTUMENT LIST FROM THE DATABASE? NOT NEEDED? can not add itels to instuments in same loop
//for some reason

foreach($_GET['checkboxTwo'] as $checkboxTwo){
    $sql = "INSERT INTO station (station_id, Cruise_c_id) VALUES (?, ?)";
    $stmt= $mysqli->prepare($sql);
    $stmt->bind_param("si", $checkboxTwo, $newID );
    $stmt->execute();
    
}
foreach($_GET['checkboxThree'] as $checkboxThree){
    $sql = "INSERT INTO crew (crew_name, Cruise_c_id) VALUES (?, ?)";
    $stmt= $mysqli->prepare($sql);
    $stmt->bind_param("si", $checkboxThree, $newID );
    $stmt->execute();
}

$sql = "SET FOREIGN_KEY_CHECKS=1;";

if ($mysqli->query($sql) === TRUE) {
    
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }

$mysqli->close();

header("Location: ../createChoose.php");

?>