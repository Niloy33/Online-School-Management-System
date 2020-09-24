<?php

	require_once('C:/xampp/htdocs/Final Project/php/sessionController.php');	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Guardian's Home</title>
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

		<a href="guardianHome.php">Home</a>  |  <a href="guardianAddStudent.php">Add Student</a>  |  <a href="enrolled.php">Enrolled Organizations</a>  |  <a href="">Notice</a>  |  <a href="">Join Organization</a>  |  <a href="">Settings</a>
	</div>

	<div>
		<form>
			<table>
				<tr>
					<td>Search:</td>
					<td><input type="text" name="" id="org"></td>
					<td><input type="button" name="" id="searchb" value="Search" onclick="getOrg()"></td>
					<td></td>
				</tr>
				
			</table>
		</form>

		
	</div>

	<div id="data"></div>

</body>
<script type="text/javascript">

	function getOrg(){
		var name = document.getElementById('org').value;
		var xhttp = new XMLHttpRequest();

		xhttp.open('POST', '../../php/addStudentByG.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send('name='+name);

		xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('data').innerHTML =  this.responseText;

				}
			}

	}


	

</script>
</html>