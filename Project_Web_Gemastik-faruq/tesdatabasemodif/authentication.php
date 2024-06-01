<?php
session_start();

if(!isset($_SESSION['loggedInStatus'])){

    $_SESSION['message'] = "Login to continue...";
    
    header('Location: login.php');
    exit();
}
?>