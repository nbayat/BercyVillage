<?php
require_once 'sessionManager.php';
// terminer et deconnecter le user
if (isset($_SESSION['user'])){
    //session_abort();
    session_destroy();
    header('Location: ../views/landingPage.php');
} else header('Location: ../views/landingPage.php');
?>
