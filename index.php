<?php
session_start();
require_once('setLanguage.php');
    if (!isset($_SESSION["lang"])) {
        $_SESSION["lang"] = "ru";
        
    }
?>
<html>
    <head>
        <title><?php echo $title ?></title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body align= "center" bgcolor="#E6E6FA" href = "language.php?lang=ru">
        <form action ="login.php">
            <button class = "myButton"><?php echo $login ?></button>
        </form>
        <form action ="register.php">
            <button class = "myButton"><?php echo $regestration ?></button>
        </form>
        <a href="language.php?lang=ru">Русский язык</a>
        <a href="language.php?lang=en">English language</a>
    </body>
</html> 