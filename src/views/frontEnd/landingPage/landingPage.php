<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <script src="/src/views/frontEnd/landingPage/loginOverlay.js"></script>
    <link rel="stylesheet" href="/src/views/frontEnd/landingPage/landingPage.css">
    <title>Accueil</title>
</head>
<body>
<header>
    <nav class="navbar">
        <a href="#home">Accueil</a>
        <a href="#home">about</a>
        <span onclick="openNav()">Connection</span>
        <a href="#home">Accueil</a>
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
                include 'restoListLoader.php';
                ?>
            </div>
        </div>
    </div>
</body>
</html>