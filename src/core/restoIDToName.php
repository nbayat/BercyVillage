<?php
require_once 'mysql_connection.php';

function returnRestoNameFromID($id){
    $conn = getConnection();
    $conn->select_db('leProjet');
    $quary = "SELECT * from restaurants WHERE restaurantID = '$id'";
    $resault = mysqli_query($conn, $quary);
    if ($resault->num_rows > 0){
        return mysqli_fetch_array($resault)['nom'];
    }
    else return '-';
}

?>
