<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="/src/views/css/landingPage.css">
    <title>Accueil</title>
</head>
<body>
<header>
    <nav class="navbar">
        <a href="#home"><span class="material-icons-round">home</span></a>
        <form class="searchSection" action="">
            <input type="text" placeholder="Cherchez un restaurant,..." name="search" required>
            <input type="submit" value="Aller" name="search">
        </form>
        <a href="#home"><span class="material-icons-round">account_circle</span></a>
    </nav>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <form class="box" method="post" action='/src/core/connection.php'>
                <h1>Connexion</h1>
                <input type="text" placeholder="Identifiant" name="identifiant" id="a12" required>
                <input type="password" placeholder="Mot de passe" name="password" id="a13" required>
                <input type="submit" name="" value="Connection">
                <a href="#"> Pas de Compte</a>
            </form>
        </div>
    </div>
</header>
    <div class="bodyDiv">
        <div class="landing">
        </div>
        <div class="cardContainer">
            <div class="row">
                <?php
                include '/Users/nima/dev/leProjet/src/core/restoListLoader.php';
                ?>
            </div>
        </div>
    </div>
</body>
</html>