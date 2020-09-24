<?php
	require_once('C:/xampp/htdocs/Final Project/php/sessionController.php');	
	require_once('../service/classService.php');
	require_once('../service/userService.php');

	if(isset($_POST['stat'])){

	$status = $_POST['stat'];

	$list = getJoinlistStudent();

	echo $list[0]['sname'];
	




	$data = "<table border=1>
				<tr>
					<td>Student Name</td>
					<td>View Profile</td>
					<td></td>

				</tr>";

				

	while ($row = mysqli_fetch_assoc($list)) {



		$data .= "<tr>
					<td>{$row['sname']}</td>
					<td></td>
					<td></td>

				</tr>";
				
	}
	$data .= "</table>";

	echo $data;

}

?>































?>