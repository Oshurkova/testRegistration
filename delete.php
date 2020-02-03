<?php
    session_start(); 
    if($_SESSION['user']){ 
    }
    else {
       header("location:index.php"); 
    }
    if($_SERVER['REQUEST_METHOD'] == "GET") {
        $mysqli = new mysqli("localhost:3308", "root", "root", "first_db");
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id='$id'";
        $mysqli->query($sql);
        header("location:home.php");
    }
?>