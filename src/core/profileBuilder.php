<?php
require_once 'mysql_connection.php';
require_once 'sessionManager.php';
// Ce script crée la partie d'informations du user dans la page de profile
if (isset($_SESSION['user'])){
    $identifant = $_SESSION['user'];
    $dataBaseCallResault = getUserInfoFromDataBase($identifant);
    $mail = $dataBaseCallResault['mail'];
    $isAdmin = $dataBaseCallResault['isAdmin'];
}
// fetch les données du user depuis la base de données
function getUserInfoFromDataBase($user){
    $conn = getConnection();
    $conn->select_db('leProjet');
    $quary = "SELECT * from users WHERE identifiant = '$user'";
    $resault = mysqli_query($conn, $quary);
    if ($resault->num_rows > 0){
        $resault = mysqli_fetch_array($resault);
        return $resault;
    }
    else return null;
}
// html nécessaire
$finalResault = '';
$finalResault .= "<p1>(identifiant) $identifant</p1>";
$finalResault .= "<p1>(mail) $mail</p1>";
$finalResault .= ($isAdmin==0) ? "<p1>vous n'etes pas admin</p1>" : "<p1>vous etes admin</p1>";
function getProfile(){
    global  $finalResault;
    return "<div class='profile'>$finalResault</div>";
}
?>
