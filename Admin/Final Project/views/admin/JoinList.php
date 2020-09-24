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
	<div  id="menu">  <h4>

		<a href="adminHome.php">Home</a>  |  <a href="classInfo.php">Class</a>  |  <a href="adminStudents.php">Students</a>  |  <a href="adminTeachers.php">Teachers</a>  |  <a href="JoinList.php">Join List</a>  |  <a href="adminNotice.php">Notices</a>  |  <a href="../../php/logoutController.php"> Logout</a></h4>
	</div>

	<div>
		Activities:
		<ul>
			<li>
				<a href="#" onclick="openStudentList()">View Student List</a>
			</li>
			<li>
				<a href="#" onclick="openTeacherList()">View Teacher List</a> 
			</li>
		</ul>
	</div>

	<div id="s_list">

		
		
	</div>
	<div id="t_list"></div>


	<script type="text/javascript" src="adminJS.js"></script>

</body>
</html>