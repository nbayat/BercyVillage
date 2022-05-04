<?php
require_once 'mysql_connection.php';
require_once 'restoNameToID.php';
function updateRestoNote($resto){
    $conn = getConnection();
    $conn->select_db('leProjet');
    $restoId = restoNameToID($resto);
    // calculer la moyenne apres tous les avis
    $query = "SELECT * from avis where restaurantId = '$restoId'";
    $resault = mysqli_query($conn, $query);
    $tmpInt = 0;
    while ($tmp = mysqli_fetch_array($resault)){
        $tmpInt += intval($tmp['note']) / 2;
    }
    // fetch la note actuelle depuis la table resto
    $query = "SELECT * from restaurants where restaurantId = '$restoId'";
    $resault = mysqli_query($conn, $query);
    $currentNote = mysqli_fetch_array($resault)['note'];
    // calculer la note final
    $finalInt = ($currentNote + $tmpInt)/2;
    if ($finalInt > 5) $finalInt = 5; // ne pas passer 5
    if ($finalInt < 0) $finalInt = 0; // ne pas passer 0
    // m-a-j la note dans la table restaurants
    $query = "UPDATE restaurants SET note = '$finalInt' where restaurantID = '$restoId'";
    $resault = mysqli_query($conn, $query);

}
?>
