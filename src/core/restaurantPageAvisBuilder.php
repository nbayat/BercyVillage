<?php
require_once 'mysql_connection.php';
require_once 'userNamefromUserID.php';

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
                userIDToName($tmp['userAvisId']), $tmp['isReportedBinary']);
        }
        return $funcResault;
    }
    else return null;
}
function restoAvisHTMLBodyBuilder($avis, $note, $user, $dejaReported): string
{
    $note = ($note != 0) ? $note : '-';
    $tmp = '';
    $tmp .= '<div class="avisRow">';
    $tmp .= "<p1>$avis</p1>";
    $tmp .= "<p1>$note</p1>";
    $tmp .= "<p1>$user</p1>";
    if ($dejaReported == 0 ) {
        $tmp .= "<p1><a href='../core/reportToAdmin.php?avis=$avis'><span class='material-icons-round' style='color: orange'>report_problem</span></a></p1>";
    } else {
        $tmp .= "<p1 style='color: gray'>déjà signalé</p1>";
    }
    $tmp .= '</div>';
    return $tmp;
}

?>
