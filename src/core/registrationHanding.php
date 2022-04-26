<?php

require_once 'mysql_connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clear_input($_POST["identifiant"]);
    $email = clear_input($_POST["email"]);
    $password = password_hash(clear_input($_POST["password"]), null);
}

$conn = getConnection();
$conn->select_db('leProjet');
$quary = "INSERT INTO users (identifiant, mail, isAdmin, password) value ('$name', '$email', 0, '$password')";
mysqli_query($conn, $quary);

function clear_input($data) {
    global $conn;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = $conn->real_escape_string("$data");
    return $data;
}
?>
