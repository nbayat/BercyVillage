<?php
require_once 'mysql_connection.php';
// Restaurant ID depuis son nom
function restoNameToID($name){
    $conn = getConnection();
    $conn->select_db('leProjet');
    $quary = "SELECT * from restaurants WHERE nom = '$name'";
    $resault = mysqli_query($conn, $quary);
    if ($resault->num_rows > 0){
        return mysqli_fetch_array($resault)['restaurantID'];
    }
    else return null;
}

?>
