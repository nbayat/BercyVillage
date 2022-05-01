<?php
require_once 'mysql_connection.php';
if (isset($_GET['avis'])){
    $avis = $_GET['avis'];
    $conn = getConnection();
    $conn->select_db('leProjet');
    $quary = "DELETE from avis where avis = '$avis'";
    $resault = mysqli_query($conn, $quary);
    header("Location: ../views/profile.php");
    exit();
} else {
    header("Location: ../views/profile.php");
}
?>
