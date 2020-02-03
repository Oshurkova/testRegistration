<?php
session_start();
require_once('setLanguage.php');
?>
<html>
    <head>
        <title><?php echo $title ?></title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
	<body align= "center" bgcolor="#E6E6FA">
            <h2><?php echo $loginpage ?></h2>
            <div>            
                <form action="checklogin.php" method="post">
                    <?php echo $enterusername ?> <input type="text" name="username" required="required"/> <br/>
                    <?php echo $enterpassword ?> <input type="password" name="password" required="required"/> <br/>
                    <button class="myButton2"><?php echo $login ?></button>
                </form>
                <form action="index.php" method="post">
                    <button class="myButton2"><?php echo $back ?></button>
                </form>
            </div> 
	</body>
</html>