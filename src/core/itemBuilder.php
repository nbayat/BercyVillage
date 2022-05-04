<?php

// ce script peut construire une card (un container) qui contient
// les infos d'un resto comme par exemple
// image adress nom note, etc

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
    $tmp .= "<a target='_blank' rel='noopener noreferrer' href='/src/views/restaurantPage.php?nom=$restoName' style='text-decoration: none'>";
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
?>
