<?php
require_once 'mysql_connection.php';
require_once 'userNamefromUserID.php';
require_once 'userIDfromUserName.php';
require_once 'restoNameToID.php';
require_once 'clear_input.php';
require_once 'updateNote.php';
// envoyer un avis vers la base de données
if (isset($_POST['avis']) || isset($_POST['note'])){
    $avis = clear_input($_POST['avis'] ?? '');
    $rate = intval(clear_input($_POST['note']));
    if(!isset($_POST['note'])) $rate = intval(null);
    $restoID = restoNameToID($_POST['restoNom']);
    $userName = $_POST['user'];
    $userID = userNameToID($userName);
    $conn = getConnection();
    $conn->select_db('leProjet');
    $quary = "INSERT INTO avis(restaurantId, userAvisId, avis, note) value ('$restoID', '$userID', '$avis', '$rate')";
    updateRestoNote($_POST['restoNom']);
    mysqli_query($conn, $quary);
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
