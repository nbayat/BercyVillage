<?php

require_once 'mysql_connection.php';

function restoIDToName($id)
{
    $conn = getConnection();
    $conn->select_db('leProjet');
    $quary = "SELECT * from users WHERE userID = '$id'";
    $resault = mysqli_query($conn, $quary);
    if ($resault->num_rows > 0) {
        return mysqli_fetch_array($resault)['identifiant'];
    } else return '-';
}

?>
