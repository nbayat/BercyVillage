<?php
require_once '../../../core/mysql_connection.php';

$nbStar = 3;
$imgPath = '../../assets/img/FenetreSurCour.png';
$restoName = 'Hippopotamus';
$restoAdress = '45 Cr Saint-Emilion, 75012';

function echoImg($imgPath){
    echo "<img src='$imgPath' alt=''>";
}

function echoStar($nbStar){
    for($i = 0; $i < $nbStar; $i++){
        echo '<span class="material-icons-round" style="color: #e1e10a">star</span>';
    }
    for($j = 0; $j < 5 - $nbStar; $j++){
        echo '<span class="material-icons-round" style="color: black">star</span>';
    }
}

function echoName($restoName){
    echo "<h2>$restoName</h2>";
}

function echoAdress($restoAdress){
    echo "<p1>$restoAdress</p1>";
}


function echoCardItem($imgPath, $nbStar, $restoName, $restoAdress){

    echo "<div class='cardItem'>";
    echo "<div class='cardItemImage'>";
    echoImg($imgPath);
    echo "</div>";

    echo "<div class='cardItemTexte'>";
    echoName($restoName);
    echoAdress($restoAdress);
    echo "</div>";

    echo "<div class='cardItemRate'>";
    echoStar($nbStar);
    echo "</div>";

    echo "</div>";
}


?>

<style>



</style>

<html lang="fr">
<div class="column">
    <?php echoCardItem($imgPath, $nbStar, $restoName, $restoAdress);?>
</div>
<div class="column">
    <div class="cardItem"></div>
</div>
<div class="column">
    <div class="cardItem"></div>

</div>
</html>
