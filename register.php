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
?>
<html>
	<head>
		<title><?php echo $title ?></title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body align= "center" bgcolor="#E6E6FA">
		<h2><?php echo $regestrationpage ?></h2>
		<div>            
                <form action="register.php" method="post" enctype="multipart/form-data">
                    <?php echo $enterusername ?> <input type="text" name="username" required="required"/> <br/>
                    <?php echo $enterpassword ?> <input type="password" name="password" required="required"/> <br/>
                    <input type="file" name="myimage">
                    <br/>
                    <button class="myButton2"><?php echo $create ?></button>
                </form>
                <form action="index.php" method="post">
                    <button type="submit" class="myButton2"><?php echo $back ?></button>
                </form>
            </div>     
	</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = $_POST['username'];
    $password = $_POST['password'];
    if (strlen($password) < 3    or strlen($password) > 15) { 
        if ($check == 1) {
            Print '<script>alert("Короткий пароль");</script>'; 
            Print '<script>window.location.assign("register.php");</script>';
        } else {
            Print '<script>alert("Password is too short");</script>'; 
            Print '<script>window.location.assign("register.php");</script>';	
        }
    }
    if (preg_match("/^[a-zA-Z0-9\!@#\/\$%\^&\*\(\)\[\]\{\}\-=_\+\.,'\"<>\?]+$/", $password)) {
        if ($check == 1) {
            Print '<script>alert("Недопустимые символы в пароле");</script>'; 
            Print '<script>window.location.assign("register.php");</script>';
        } else {
            Print '<script>alert("Incorrect symbols in a password");</script>'; 
            Print '<script>window.location.assign("register.php");</script>';	
        }	
    }
    $mysqli = new mysqli("localhost:3308", "root", "root", "first_db");
    $query = "SELECT username, password FROM users WHERE username='$username'";
    $table_users = "";
    $table_password = "";
    if ($result = mysqli_query($mysqli, $query)) {
        while ($row = mysqli_fetch_assoc($result)) {
        if ($check == 1) {
            Print '<script>alert("Такой пользователь уже существует");</script>'; 
            Print '<script>window.location.assign("register.php");</script>';
        } else {
            Print '<script>alert("This user is already exists");</script>'; 
            Print '<script>window.location.assign("register.php");</script>';	
        }
    }
    }

    $time = strftime("%X"); //time
    $date = strftime("%B %d, %Y"); //date
    $upload_image=$_FILES["myimage"][ "name" ];
    $folder="images/";
    move_uploaded_file($_FILES["myimage"]["tmp_name"], "$folder".$_FILES["myimage"]["name"]);
    
    $mysqli = new mysqli("localhost:3308", "root", "root", "first_db");
    if ($mysqli->connect_errno) {
        echo $errorsql . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    /*echo $mysqli->host_info . "\n";*/
    $sql = "INSERT INTO users (username, password, time, date, imagename, imagecontent) VALUES ('$username', '$password', '$time', '$date','$folder','$upload_image')";
    if ($mysqli->query($sql) === TRUE) {
        echo $createsuccess;
    } else {
        echo $error . $sql . "<br>" . $mysqli->error;
    }
}
?>
