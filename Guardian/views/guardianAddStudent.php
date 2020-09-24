<?php

	require_once('C:/xampp/htdocs/Summer_2020_WebTech/Final_Project/php/sessionController.php');	
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

		<a href="guardianHome.php">Home</a>  |  <a href="guardianAddStudent.php">Add Student</a>  |  <a href="enrolled.php">Enrolled Organizations</a>  |    <a href="">Join Organization</a>  |  <a href="studentProfile.html">Student Profile</a>
	</div>



	<form method="post" action="../php/addStudentByG.php">

		<p id="cookie" ><?php echo $_COOKIE['id']; ?></p>

		<table>
			<tr>
				<td>
					Search Student with Email
				</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<input type="text" name="email" id="gemail">
				</td>
				<td></td>
			</tr>
			<tr>
				<td>
					<input type="button" name="submit" value="Search" onclick="check()"> <div id="pval"></div> 
					
				</td>
				<td>
					<p id="pval"></p>
				</td>
			</tr>
			<tr>
				<td>
					<input type="button" id="link" name="" value="Add" onclick="addStudent()"> 
				</td>
				<td>
					<p id="addstat"></p>
				</td>
			</tr>

		</table>
	</form>

	

		<script type="text/javascript">
			document.getElementById('link').style.display = "none";
			document.getElementById('cookie').style.display = "none";

			function check(){
				document.getElementById('link').style.display = "none";

				var email = document.getElementById('gemail').value;
 
				var xhttp = new XMLHttpRequest();
				xhttp.open('POST', '../php/addStudentByG.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('email='+email);

				xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('pval').innerHTML =  this.responseText;
					if(document.getElementById('pval').innerHTML == "Student is found!"){
					document.getElementById('link').style.display = "block";
				}
				}
			}

			}

			function addStudent(){

				var email = document.getElementById('gemail').value;
				var id = document.getElementById('cookie').innerHTML.value;

				var xhttp2 = new XMLHttpRequest();
				xhttp2.open('POST', '../php/addStudentByG.php', true);
				xhttp2.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp2.send('semail='+email+'&id='+id+'name='+'true');

				xhttp2.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('addstat').innerHTML =  this.responseText;
					
				}
				}



			}

 




		</script>

		
	




</body>
</html>