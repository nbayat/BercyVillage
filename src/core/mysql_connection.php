<?php

// ce script initialise une connection vers le serveur mysql

// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// vous devez mettre à jour les variables suivantes selon de votre configuration mysql
//
$servername = "localhost";
//$username = "nima";
$password = "leprojetNima";
$username = "root";
//
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function getConnection(){
    global $conn;
    return $conn;
}
?>