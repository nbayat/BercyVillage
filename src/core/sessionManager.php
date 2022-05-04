<?php
session_start();
// Verifier s'il y a deja un user
function checkUserExiste(){
    if (!isset($_SESSION['user'])){
        header('Location: /src/views/connection.php');
    }
}
?>
