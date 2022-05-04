<?php

session_start();
// Verifier si il y a deja une user

function checkUserExiste(){
    if (!isset($_SESSION['user'])){
        header('Location: /src/views/connection.php');
    }
}

?>
