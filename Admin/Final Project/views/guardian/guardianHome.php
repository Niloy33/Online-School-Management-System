 <?php
	require_once('C:/xampp/htdocs/Final Project/php/sessionController.php');	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Guardian's Homepage</title>
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
	<div>  

		<a href="">Home</a>  |  <a href="guardianAddStudent.php">Add Student</a>  |  <a href="enrolled.php">Enrolled Organizations</a>  |  <a href="guardianNotice.php">Notices</a>  |  <a href="">Join Organization</a>  |  <a href="">Settings</a>
	</div>

</body>
</html>