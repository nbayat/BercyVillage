<?php
require_once '/Users/nima/dev/leProjet/src/core/mysql_connection.php';

$nbStar = 3;
$imgPath = '../../assets/img/FenetreSurCour.png';
$restoName = 'Hippopotamus';
$restoAdress = '45 Cr Saint-Emilion, 75012';

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

function returnItem($imgPath, $nbStar, $restoName, $restoAdress){

    $tmp = "<html></html>";
    $tmp .= "<a href='/src/views/restaurantPage.php?nom=$restoName' style='text-decoration: none'>";
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
    // echo $row['nom'];
    echo returnItem($row['img__Path'], intval($row['note']), $row['nom'], $row['adress']);
}
for ($i = 0; $i < 3 - $result->num_rows % 3; $i++){
    echo "<div class='cardItemEmpty'></div>";
}
?>

