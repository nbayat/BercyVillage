<?php
require_once '../core/sessionManager.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
        <link rel="stylesheet" href="css/landingPage.css">
        <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/footer.css">
        <title>Accueil</title>
    </head>
    <body class="body">
    <header>
        <?php require_once 'commun/navbar.php'?>
    </header>
    <div class="bodyContainer">
        <div class="landingDiv">
            <?php
            include_once './animation/typeLoop.php';?>
        </div>
        <div class="row">
            <?php
            include '../core/restoListLoader.php';
            ?>
        </div>
    </div>
    <footer>
        <?php require_once 'commun/footer.php'?>
    </footer>
    </body>


</html>



