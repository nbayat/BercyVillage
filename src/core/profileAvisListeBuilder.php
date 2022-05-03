<?php
require_once 'mysql_connection.php';
require_once 'restoIDToName.php';
require_once 'userNamefromUserID.php';

if (isset($_SESSION['user'])){
    $identifant = $_SESSION['user'];
    $dataBaseCallResault = getUserInfoFromDataBase($identifant);
    $isAdmin = $dataBaseCallResault['isAdmin'];
    $userID = $dataBaseCallResault['userID'];
}

function getAvisListe(): ?string
{
    global $isAdmin;
    global $userID;
    global $identifant;
    $conn = getConnection();
    $conn->select_db('leProjet');

    if ($isAdmin ===0){
        $quary = "SELECT * from avis WHERE userAvisId = '$userID'";
        $resault = mysqli_query($conn, $quary);
    } else {
        $quary = "SELECT * from avis";
        $resault = mysqli_query($conn, $quary);
    }
    if ($resault->num_rows > 0){
        $funcResault = '';
        while ($tmp = mysqli_fetch_array($resault)){
            $funcResault .= avisHTMLBodyBuilder($tmp['avis'], $tmp['note'],
                userIDToName($tmp['userAvisId']), returnRestoNameFromID($tmp['restaurantId']));
        }
        return $funcResault;
    }
    else return null;
}


function avisHTMLBodyBuilder($avis, $note, $user, $resturant): string
{
    $tmp = '';
    $tmp .= '<div class="avis">';
    $tmp .= "<p1>$avis</p1>";
    $tmp .= "<p1>$note</p1>";
    $tmp .= "<p1>$user</p1>";
    $tmp .= "<p1>$resturant</p1>";
    $tmp .= supprimerUnAvisHTML($avis);
    $tmp .= '</div>';
    return $tmp;
}

function supprimerUnAvisHTML($avis){
    $tmp = '';
    //$tmp .= '<form class="supprimer" action="supprimerAvis.php" method="get">';
    //$tmp .= '<input type="submit" name="supprimer" value="Supprimer"/>';
    $tmp .= "<a href='/src/core/supprimerAvis.php?avis=$avis' class='avis'><span class='material-icons-round'>delete</span></a>";
    //$tmp .= '</form>';
    return $tmp;
}
