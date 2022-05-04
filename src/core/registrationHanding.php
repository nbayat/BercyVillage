<?php
require_once 'mysql_connection.php';
require_once 'clear_input.php';

// pour enregistrer un user dans le database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clear_input($_POST["identifiant"]);
    $email = clear_input($_POST["email"]);
    // on hashe le mot de pass
    // PASSWORD_ARGON2I
    $password = password_hash(clear_input($_POST["password"]), null);
}
$conn = getConnection();
$conn->select_db('leProjet');
$quary = "INSERT INTO users (identifiant, mail, isAdmin, password) value ('$name', '$email', 0, '$password')";
mysqli_query($conn, $quary);
session_start();
$_SESSION['user'] = $name;
header("Location: ../views/landingPage.php");
?>
