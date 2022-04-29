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

<style>

    .body{
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .mainContainer{
        width: 95%;
        height: 90%;
        border-radius: 20px;
        display: flex;
        flex-direction: row;
    }

    .mainContainerLeftDiv {
        flex: 3;
    }

    .mainContainerRightDiv {
        flex: 2;
        background-color: black;
        padding: 20px;
        color: white;
        border-bottom-right-radius: 20px;
        border-top-right-radius: 20px;
    }

    .inputBoxDiv{

     }

    .texteInputRow{
        display: flex;
        flex-direction: row;
    }
    
    .inputSection{
        flex: 4;
        width: 100%;
        height: 40px;
    }

    .inputNum {
        width: 60px;
    }
    
    .publierButton{
        flex: 1;
        background-color: orange;
        border: black;
    }

    .avisDiv{
        height: 500px;
        background-color: #04AA6D;
    }


    .mainContainerLeftDiv img {
        width: 100%;
        height: 100%;
        border-bottom-left-radius: 20px;
        border-top-left-radius: 20px;
    }

    .mainContainerRightDiv h1{
        text-decoration: underline;

    }

    .NomNoteRow {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .noteIcon{

    }


</style>