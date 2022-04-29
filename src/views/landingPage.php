<?php
//require 'frontEnd/landingPage/landingPage.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
        <link rel="stylesheet" href="/src/views/css/landingPage.css">
        <link rel="stylesheet" href="/src/views/css/navbar.css">
        <link rel="stylesheet" href="/src/views/css/footer.css">
        <title>Accueil</title>
    </head>
    <body class="body">
    <header>
        <?php require_once 'commun/navbar.php'?>
    </header>
    <div class="bodyContainer">
        <div class="landingDiv"></div>
        <div class="row">
            <?php
            include '/Users/nima/dev/leProjet/src/core/restoListLoader.php';
            ?>
        </div>
    </div>
    <footer>
        <?php require_once 'commun/footer.php'?>
    </footer>
    </body>


</html>



