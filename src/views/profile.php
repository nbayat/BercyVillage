<?php
require_once '../core/sessionManager.php';
checkUserExiste();
require_once '../core/profileBuilder.php';
require_once '../core/profileAvisListeBuilder.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="/src/views/css/navbar.css">
    <link rel="stylesheet" href="/src/views/css/footer.css">
    <link rel="stylesheet" href="/src/views/css/profile.css">
    <title>Accueil</title>
</head>
<body class="body">
<header>
    <?php require_once './commun/navbar.php'?>
</header>
<div class="bodyContainer">
    <div class="infoContainer">
        <div class="infoContainerProfile"><?php echo getProfile();?></div>
        <div class="infoContainerAvis">
            <div class="avis">
                <p1>Avis</p1>
                <p1>Note</p1>
                <p1>Par</p1>
                <p1>restaurant</p1>
                <p1>supprimer</p1>
                <p1>signalé</p1>
            </div>
            <hr/>
            <?php echo profileGetAvisListe();?>
        </div>
    </div>
</div>
<footer>
    <?php require_once './commun/footer.php'?>
</footer>
</body>

</html>
