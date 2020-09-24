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
		<form>
			<table>
				<tr>
					<td>
						<input type="radio" name="ntype" value="fullclass" onclick="openClass()"> Send Notice to full Class 
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="full">

		

		<p id="clist"></p>
		<p>
			Class ID: <input type="text" name="" id="c_id"> <input type="button" name="" value="Select" onclick="openNotice()">
		</p>
		
	</div>
	<div id="notice">
		<fieldset>
			<legend>Notice</legend>
			<table>
				<tr>
					<td>Date:</td>
					<td><input type="text" name="" id="date"></td>
				</tr>
				<tr>
					<td>From:</td>
					<td><input type="text" name="" id="from"></td>
				</tr>
				<tr>
					<td>Subject:</td>
					<td><input type="text" name="" id="subject"></td>
				</tr>
				<tr>
					<td>Notice:</td>
					<td><input type="text" name="" id="msgforg"></td>
				</tr>
				<tr>
					<td><input type="button" name="" value="Send" onclick="sendNotice()"></td>
					<td id="msgreply"></td>
				</tr>

			</table>
		
		</fieldset>
	</div>





<script type="text/javascript" src="adminJS.js"></script>
</body>
</html>