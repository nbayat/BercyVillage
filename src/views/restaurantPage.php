<?php
require_once '../core/mysql_connection.php';
require_once '../core/restaurantPageAvisBuilder.php';
require_once '../core/sessionManager.php';

checkUserExiste();

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
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <link href="css/restaurantPage.css" rel="stylesheet">
    <title><?php echo $nom?></title>
</head>
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
            <div class="avisRow" style="height: 20px"><p1>Avis</p1><p1>Note</p1><p1>Par</p1></div>
            <hr/>
            <?php echo getAvisListe($row['restaurantID']); ?>
        </div>
        <hr/>
        <div class="inputBoxDiv">
            <form class="texteInputRow" action="../core/submitAvis.php" method="post">
                <input type="text" class="inputSection" placeholder="Donnez votre avis" name="avis">
                <input type="number" class="inputNum" max="5" min="0" placeholder="Notez" name="note">
                <input type="text"  placeholder="Notez" name="restoNom" style="display: none" value="<?php echo $nom; ?>">
                <input type="text"  placeholder="Notez" name="user" style="display: none" value="<?php echo $_SESSION['user']; ?>">
                <input type="submit" class="publierButton" placeholder="Publier">
            </form>
        </div>
    </div>
</div>
</body>
</html>

