<?php

//require_once "/Users/nima/dev/leProjet/src/core/registrationHandeing.php";


?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>S'inscrire</title>
</head>
<body>

<form class="box" method="post" action="/src/core/registrationHanding.php">
    <h1>S'inscrire</h1>
    <input type="text" name="identifiant" placeholder="Identifiant souhité">
    <input type="text" name="email" placeholder="Votre mail">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="submit" value="S'inscrire">
</form>

</body>
</html>



<style>

    body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: white;
    }
    .box{
        width: 600px;
        height: 350px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: black;
        text-align: center;
        border-radius: 5px;
    }

    .box input[type="text"], input[type="password"]{
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid deepskyblue;
        padding: 14px 10px;
        width: 200px;
        outline: none;
        color: white;
        border-radius: 2px;
        transition: 0.25s;
    }

    .box h1{
        color: white;
        text-transform: uppercase;
        font-weight: 500;
    }

    .box input[type="text"]:focus, input[type="password"]:focus{
        width: 250px;
        border-color: red;
    }

    .box input[type="submit"]{
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid greenyellow;
        padding: 14px 20px;
        width: 100px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
    }

    .box input[type="submit"]:hover{
        background: greenyellow;
        color: black;
    }


</style>
