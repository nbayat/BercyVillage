<?php
$servername = "localhost";
$username = "nima";
$password = "leprojetNima";

// Create connection


$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getConnection(){
    global $conn;
    return $conn;
}



?>