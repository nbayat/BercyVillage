<?php
require_once 'mysql_connection.php';
require_once 'userNamefromUserID.php';
// if (!isset($_GET['id'])) exit();


function getAvisListe($restoID): ?string
{
    $conn = getConnection();
    $conn->select_db('leProjet');
    $quary = "SELECT * from avis where restaurantId = '$restoID'";
    $resault = mysqli_query($conn, $quary);
    if ($resault->num_rows > 0){
        $funcResault = '';
        while ($tmp = mysqli_fetch_array($resault)){
            $funcResault .= restoAvisHTMLBodyBuilder($tmp['avis'], $tmp['note'],
                userIDToName($tmp['userAvisId']));
        }
        return $funcResault;
    }
    else return null;
}



function restoAvisHTMLBodyBuilder($avis, $note, $user): string
{
    $note = ($note != 0) ? $note : '-';
    $tmp = '';
    $tmp .= '<div class="avisRow">';
    $tmp .= "<p1>$avis</p1>";
    $tmp .= "<p1>$note</p1>";
    $tmp .= "<p1>$user</p1>";
    $tmp .= '</div>';
    return $tmp;
}

?>
