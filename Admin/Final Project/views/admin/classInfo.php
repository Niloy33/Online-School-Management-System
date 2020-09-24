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
		<legend>Class</legend>
		<form method="post" action="classinfo.php">
			<table>
				<tr>
					<td>
						Class: <select name="class" id="s_class">
							<option></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>


						</select>
					</td>
					<td id="ci_c">
						
					</td>
				</tr>
				
				<tr>
					<td>
						Session: <select name="session" id="s_session">
							<option></option>
						<option value="2019-2020">2019-2020</option>
						<option value="2020-2021">2020-2021</option>
					</td>
					<td id="ci_ses">
						
					</td>
				</tr>
				
				<tr>
					<td>
						Section: <input type="text" name="section" id="s_section">
					</td>
					<td id="ci_sec">
						
					</td>
				</tr>
				<tr>
					<td>
						Subject: <input type="text" name="subject" id="s_subject">
					</td>
					<td id="ci_sub">
						
					</td>
				</tr>
				<tr>
					<td>
						<input type="button" value="Create Class" onclick="createClass()"> <input type="button" value="Delete Class" onclick="deleteClass()"> <input type="button" value="Search Class" onclick="searchClass()">
					</td>
					<td id="sres">
						
						<input type="button" name="" value="Add Teacher" onclick="findTeacher()">
						<input type="button" name="" value="Add Student" onclick="findStudent()">						
					</td>
				</tr>
				<tr>
					<td id="res">


						
					</td>
					<td>
											
					</td>
				</tr>

			</table> 
		</form>
	</fieldset>
	</div>
	<div id="tlist">
		
	</div>
	<div id="slist">
		
	</div>


	

					

			

	
		

		
	

		<script type="text/javascript" src="adminJS.js"></script>





</body>
</html>