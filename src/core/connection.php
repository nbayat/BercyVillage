<?php

require_once 'mysql_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clear_input($_POST["identifiant"]);
    //$password = password_hash(clear_input($_POST["password"]), null);
    $password = $_POST["password"];
}

$conn = getConnection();
$conn->select_db('leProjet');
$quary = "SELECT * from users WHERE identifiant = '$name'";
$resault = mysqli_query($conn, $quary);
echo $resault->num_rows;
$resault = mysqli_fetch_array($resault);
if (isset($resault['password']) && $resault['password'] == $password){
    session_start();
    $_SESSION['user'] = $name;
    header("Location: ../views/landingPage.php");
    exit();
} else {
    //echo __DIR__.;
    header("Location: ../views/connection.php?invalide=true");
    exit();
};

function clear_input($data) {
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = $conn->real_escape_string("$data");
    return $data;
}
?>
