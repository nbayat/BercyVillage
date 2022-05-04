<?php
require_once 'mysql_connection.php';
require_once 'clear_input.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // hasher le mot de pass pour comparer avec celui du database
    $name = clear_input($_POST["identifiant"]);
    $password = password_hash(clear_input($_POST["password"]), null);

    // debug
    // $password = $_POST["password"];

    $conn = getConnection();
    $conn->select_db('leProjet');

    $quary = "SELECT * from users WHERE identifiant = '$name'";
    $resault = mysqli_query($conn, $quary);
    $resault = mysqli_fetch_array($resault);
    // verifie si le mot de pass egal à mot de pass stocké en hash
    if (isset($resault['password']) && $resault['password'] == $password){
        session_start();
        $_SESSION['user'] = $name;
        header("Location: ../views/landingPage.php");
        exit();
    } else header("Location: ../views/connection.php?invalide=true");
} else header("Location: ../views/connection.php?invalide=true");
?>
