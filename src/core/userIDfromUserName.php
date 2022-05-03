<?php

require_once 'mysql_connection.php';

function userNameToID($name)
{
    $conn = getConnection();
    $conn->select_db('leProjet');
    $quary = "SELECT * from users WHERE identifiant = '$name'";
    $resault = mysqli_query($conn, $quary);
    if ($resault->num_rows > 0) {
        return mysqli_fetch_array($resault)['userID'];
    } else return null;
}

?>
