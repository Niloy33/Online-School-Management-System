<?php
	require_once('C:/xampp/htdocs/Final Project/php/sessionController.php');	
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="layout.css">
	<h1>ABC Online School</h1>
	<title>Admin Home</title>
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

		<a href="adminHome.php">Home</a>  |  <a href="classInfo.php">Class</a>  |  <a href="adminStudents.php">Students</a>  |  <a href="adminTeachers.php">Teachers</a>  |  <a href="JoinList.php">Join List</a>  |  <a href="adminNotice.php">Notices</a>  |  <a href="../../php/logoutController.php"> Logout</a></h4>
	</div>

	<div>
		<fieldset>
			<legend>Search Student</legend>
			<form method="post" action="../../php/classController.php" onsubmit="return removeValidation()">
				<table>
					<tr>
						<td>Teacher Id:</td>
						<td><input type="text" name="sid" id="s_id"></td></r>
						<td>Block Status<select name="blockstatus">
							<option value="enable">Enable</option>
							<option value="block">Block</option>
						</select></td>
					</tr>
					<tr>
						<td id="remove"></td><td></td><td></td>
					</tr>
					<tr>
						<td><input type="submit" name="remove_submitt" value="Remove" ></td>
						<td><input type="submit" name="block_Submitt" value="Enable/Block"></td>
						<td></td>
						
					</tr>
				</table>
			</form>
			<div id="st_res"></div>
		</fieldset>

	</div>
	<div id="st_res">
		
	</div>

	<script type="text/javascript" src="adminJS.js"></script>
 
</body>
</html>