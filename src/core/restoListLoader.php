<?php
require_once '../core/mysql_connection.php';
// career les etoiles
function echoStar($nbStar){
    $tmp = '';
    for($i = 0; $i < $nbStar; $i++){
        $tmp .= '<span class="material-icons-round" style="color: #e1e10a">star</span>';
    }
    for($j = 0; $j < 5 - $nbStar; $j++){
        $tmp .= '<span class="material-icons-round" style="color: white">star</span>';
    }
    return $tmp;
}
// le html nécessaire pour chaque restaurant dans la liste
function returnItem($imgPath, $nbStar, $restoName, $restoAdress){
    $tmp = "<html></html>";
    $tmp .= "<a target='_blank' rel='noopener noreferrer' href='../views/restaurantPage.php?nom=$restoName' style='text-decoration: none'>";
    $tmp .= "<div class='cardItem'>";
    $tmp .= "<div class='cardItemImage'>";
    $tmp .= "<img src='$imgPath' alt=''>";
    $tmp .= "</div>";
    $tmp .= "<div class='cardItemTexte'>";
    $tmp .= "<h2 style='text-decoration: underline'>$restoName</h2>";
    $tmp .= "<p1>$restoAdress</p1>";
    $tmp .= "</div>";
    $tmp .= "<div class='cardItemRate'>";
    $tmp .= echoStar($nbStar);
    $tmp .= "</div>";
    $tmp .= "</a></div>";
    return $tmp;
}

$conn = getConnection();
$conn->select_db('leProjet');

$result = mysqli_query($conn, "SELECT * FROM restaurants");
while ($row = mysqli_fetch_array($result)) {
    echo returnItem($row['img__Path'], intval($row['note']), $row['nom'], $row['adress']);
}
// on insère certaines div vide pour bien ranger les autres div si besoin,
// c'est absolument indésirable, mais certain browser peuvent avoir de problem
// montrer si non
// donc pas nécessaire juste pour nous assurer
for ($i = 0; $i < 3 - $result->num_rows % 3; $i++){
    echo "<div class='cardItemEmpty'></div>";
}
?>

