<?php
require_once 'sessionManager.php';
// terminer et deconnecter le user
if (isset($_SESSION['user'])){
    //session_abort();
    session_destroy();
    header('Location: /src/views/landingPage.php');
} else header('Location: /src/views/landingPage.php');
?>
