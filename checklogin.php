<?php
    session_start();
    require_once('setLanguage.php');
    $check = 0;
    if ($_SESSION["lang"]=="ru") {
        $check = 1;
    } 
    else {
        $check = 2;
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mysqli = new mysqli("localhost:3308", "root", "root", "first_db");
    $query = "SELECT username, password FROM users WHERE username='$username'";
    $table_users = "";
    $table_password = "";
    if ($result = mysqli_query($mysqli, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $table_users = $row['username']; 
			$table_password = $row['password']; 
        }
        
        if(($username == $table_users) && ($password == $table_password)) {
            $_SESSION['user'] = $username; 
            header("location: home.php"); 
	    }
	    else {
            if (($password != $table_password) && ($username == $table_users)) {
                if ($check == 1) {
                    Print '<script>alert("Неверный пароль");</script>'; 
                    Print '<script>window.location.assign("login.php");</script>';
                } else {
                    Print '<script>alert("Incorrect password");</script>'; 
                    Print '<script>window.location.assign("login.php");</script>';	
                }	
            }
            if (($password != $table_password) && ($username != $table_users)) {
                if ($check == 1) {
                    Print '<script>alert("Неверные данные");</script>'; 
                    Print '<script>window.location.assign("login.php");</script>';
                } else {
                    Print '<script>alert("Incorrect information");</script>'; 
                    Print '<script>window.location.assign("login.php");</script>';
                }
            }
        }
    }
?>