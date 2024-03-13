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

$username = $_GET["username"];
$password = $_GET["password"];

$sql = "SELECT username, pasword FROM user";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        if (($row["username"] == $username) && ($row["pasword"] == $password)) {
            header("Location: ..\createChoose.php");
            exit();
        }
    }
} 

header("Location: ..\index.php");

$mysqli->close();

?>