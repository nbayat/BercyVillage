<?php
require_once 'mysql_connection.php';
require_once 'sessionManager.php';
if (isset($_SESSION['user'])){
    $identifant = $_SESSION['user'];
    $dataBaseCallResault = getUserInfoFromDataBase($identifant);
    $mail = $dataBaseCallResault['mail'];
    $isAdmin = $dataBaseCallResault['isAdmin'];
}

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

$finalResault = '';
//$finalResault = "<p1 style='border-bottom: black solid 2px;'>Votre profile</p1>";
$finalResault .= "<p1>(identifiant) $identifant</p1>";
$finalResault .= "<p1>(mail) $mail</p1>";
$finalResault .= ($isAdmin==0) ? "<p1>vous n'etes pas admin</p1>" : "<p1>vous etes admin</p1>";

function getProfile(){
    global  $finalResault;
    return "<div class='profile'>$finalResault</div>";
}

?>
