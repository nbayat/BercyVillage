<?php
$servername = "localhost";
$username = "nima";
$password = "leprojetNima";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

$conn->select_db('leProjet');

if ($result = $conn -> query("SELECT * FROM restaurants")) {
    echo "Returned rows are: " . $result -> num_rows;
    // Free result set
    $result -> free_result();
}



?>