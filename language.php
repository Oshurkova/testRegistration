<?php
session_start();
    if (isset($_GET['lang']) && $_GET['lang']=="ru") {
        $_SESSION['lang']=ru; 
    }
    if (isset($_GET['lang']) && $_GET['lang']=="en") {
        $_SESSION['lang']=en;  
    }
header( "Location:/testTask/index.php" );
?>