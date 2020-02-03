<?php
session_start();
require_once('setLanguage.php');
?>
<html>
	<head>
		<title><?php echo $title ?></title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<?php
        
	if($_SESSION['user']){ 
	}
	else{
		header("location:index.php"); 
	}
	$user = $_SESSION['user']; 
	?>
	<body align= "center" bgcolor="#E6E6FA">
		<h2><?php echo $information ?></h2>
		<p><?php echo $hello ?> <?php Print "$user"?>!</p> 
		<form action="logout.php" method="post">
            <button class="myButton2"><?php echo $logout ?></button>
        </form>
		<h2 align="center"><?php echo $users ?></h2>
		<table border="1px" width="100%">
			<tr>
				<th><?php echo $photo ?></th>
				<th><?php echo $id ?></th>
				<th><?php echo $name ?></th>
                <th><?php echo $time ?></th>
                <th><?php echo $delete ?></th>
			</tr>
			<?php
                $conn = new mysqli("localhost:3308", "root", "root", "first_db");
                $sql = "SELECT id, username, date, time, imagename, imagecontent  FROM users";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {	
						$image_name=$row["imagename"];
    					$image_path=$row["imagecontent"];
						Print "<tr>";
							Print '<td align="center"><img src="'.$image_name.'" width=100px; height=100px;/></td>';			
                            Print '<td align="center">'. $row['id'] . "</td>";
                            Print '<td align="center">'. $row['username'] . "</td>";
                            Print '<td align="center">'. $row['time'] . "</td>";
							Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')">delete</a> </td>';
                        Print "</tr>";
                    }
				}
            ?>
		</table>
        <script>
			function myFunction(id)
			{
			var r=confirm("<?php echo $areyousure ?>");
			if (r==true)
			  {
			  	window.location.assign("delete.php?id=" + id);
			  }
			}
	</script>  
    </body>    
</html>