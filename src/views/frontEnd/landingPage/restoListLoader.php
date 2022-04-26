<?php
// require_once '../../../core/mysql_connection.php';

$nbStar = 4;
function echoStar($nbStar){
    for($i = 0; $i <= $nbStar; $i++){
        echo '<span class="material-icons-round" style="color: #e1e10a">star</span>';
    }
    for($j = 5 - $nbStar; $j <= $nbStar; $j++){
        echo '<span class="material-icons-round" style="color: black">star</span>';
    }
}

?>

<style>



</style>

<html>
<div class="column">
    <div class="cardItem">
        <div class="cardItemImage">
            <img src="../../assets/img/FenetreSurCour.png">
        </div>
        <div class="cardItemTexte">
            <h2>Hippopotamus</h2>
            <p1>45 Cr Saint-Emilion, 75012</p1>
        </div>
        <div class="cardItemRate">

            <?php
            echoStar(3);
            ?>

            <!--
            <span class="material-icons-round">star</span>
            <span class="material-icons-round">star</span>
            <span class="material-icons-round">star</span>
            <span class="material-icons-round">star</span>
            <span class="material-icons-round">star</span>
            -->
        </div>
    </div>
</div>
<div class="column">
    <div class="cardItem"></div>
</div>
<div class="column">
    <div class="cardItem"></div>

</div>
</html>
