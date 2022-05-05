<?php
require_once '/Users/nima/dev/leProjet/src/core/searchResaultBuilder.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche</title>
</head>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="/src/views/css/navbar.css">
    <link rel="stylesheet" href="/src/views/css/footer.css">
    <link rel="stylesheet" href="/src/views/css/search.css">
    <link rel="stylesheet" href="/src/views/css/landingPage.css">
    <title>Accueil</title>
</head>
<body class="body">
<header>
    <?php require_once './commun/navbar.php'?>
</header>
<div class="bodyContainer">
    <?php
    $resault = getResault();
    if (isset($_GET['searchKey']) && empty($resault)) { echo '<div class="emptySearchResault"><h2>Ne existe Pas</h2></div>';}
    else echo $resault;
    ?>
</div>
<footer>
    <?php require_once './commun/footer.php'?>
</footer>
</body>

</html>
