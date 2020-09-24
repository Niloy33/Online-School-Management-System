<?php

	require_once('C:/xampp/htdocs/Summer_2020_WebTech/Final_Project/php/sessionController.php');	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Student and Organization</title>
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

	<form>
		<table>
			<tr>
				<td>
					Send Join Request:
				</td>
				<td>
					<input type="text" name="" id="gid" onclick="getId()"> <input type="text" name="" id="oid" value="<?php echo $_GET['id']; ?>">
				</td>
				<td><input type="button" name="" value="Send Join Request" onclick="send()"></td>
			</tr>
		</table>
	</form>
	<p id="x"></p>




	<script type="text/javascript">
		


		function getId(){

		

		var sid = document.getElementById('gid').value = 0;
		var xhttp = new XMLHttpRequest();

		xhttp.open('POST', '../php/addStudentByG.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send('gid='+sid);

		xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById('gid').value =  this.responseText;
				}
			}

	}

	function send(){

		var xhttp2 = new XMLHttpRequest();

		var sid = document.getElementById('gid').value;
		var oid = document.getElementById('oid').value;

		xhttp2.open('POST', '../php/addStudentByG.php', true);
		xhttp2.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp2.send('pid='+sid+'&oid='+oid);

		xhttp2.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				document.getElementById('x').innerHTML =  this.responseText;
			}
		}





	}
		
		
	</script>

</body>
</html>
