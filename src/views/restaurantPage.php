<?php
require_once '/Users/nima/dev/leProjet/src/core/mysql_connection.php';

$nom = $_GET['nom'];
$conn = getConnection();
$conn->select_db('leProjet');
$qaury = "Select * from restaurants WHERE nom = '$nom'";
$resault = mysqli_query($conn, $qaury);
$row = mysqli_fetch_array($resault);


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



?>

<html lang="fr">
<link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
<link href="css/restaurantPage.css" rel="stylesheet">
<body class="body">
<div class="mainContainer">
    <div class="mainContainerLeftDiv">
        <img src="<?php echo $row['img__Path']?>">
    </div>
    <div class="mainContainerRightDiv">
        <div class="NomNoteRow">
            <h2><?php echo $row['nom']?></h2>
            <h2><?php echo echoStar(intval($row['note']));?></h2>
        </div>
        <p1><?php echo $row['adress']?></p1>
        <hr/>
        <div class="avisDiv">

        </div>
        <hr/>
        <div class="inputBoxDiv">
            <form class="texteInputRow" action="">
                <input type="text" class="inputSection" placeholder="Donnez votre avis">
                <input type="number" class="inputNum" max="5" min="0" placeholder="Notez">
                <input type="submit" class="publierButton" placeholder="Publier">
            </form>
        </div>
    </div>
</div>
</body>
</html>

