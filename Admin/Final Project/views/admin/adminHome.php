<?php
	require_once('C:/xampp/htdocs/Final Project/php/sessionController.php');	
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="layout.css">
	<title>Admin Home</title>
	<h1>ABC Online School</h1>
	<table>
		<tr>
			<td>
				User Name: <?php echo $_COOKIE['name'] ?>
			</td>		
		</tr>
		<tr>
			<td>
				Account Type: <?php echo $_COOKIE['type'] ?>
			</td>		
		</tr>		
	</table>	
	
</head>
<body>
	<div id="menu">  <h4>

		<a href="adminHome.php">Home    </a>    |    <a href="classInfo.php">Class    </a>   |    <a href="adminStudents.php">Students    </a>    |    <a href="adminTeachers.php">Teachers    </a>    |    <a href="JoinList.php">Join List    </a>    |    <a href="adminNotice.php">Notices    </a>    |    <a href="../../php/logoutController.php"> Logout    </a></h4>
	</div>


	<h2>Welcome Admin! <?php echo $_COOKIE['name']; ?></h2>



</body>
</html>