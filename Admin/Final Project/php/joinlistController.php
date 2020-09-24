<?php
	require_once('C:/xampp/htdocs/Final Project/php/sessionController.php');	
	require_once('../service/classService.php');
	require_once('../service/userService.php');

	if(isset($_POST['stat'])){

	$status = $_POST['stat'];
	$id = $_COOKIE['id'];

	$r = getOid($id);

	//echo $r;

	

	$list = getJoinlistStudent($r);
	//echo $list[0]['sid'];




	
	




	$data = "<table border=1>
				<tr>
				    <td>Photo</td>
					<td>Name</td>
					<td>Email</td>
					<td>Phone No.</td>
					<td>Gender</td>
					<td>DOB</td>
					<td>Action</td>
				</tr>";

				

	for($i=0; $i != count($list); $i++){ 

		$uinfo = getById($list[$i]['sid']);
		//echo $uinfo['uname'];


		$data .= "<tr>
		               <td><img src=\"".$uinfo['uphoto']."\"width=\"100\" height=\"100\"></td>
		               <td>".$uinfo['uname']."</td>
		               <td>".$uinfo['uemail']."</td>
		               <td>".$uinfo['uphoneno']."</td>
		               <td>".$uinfo['ugender']."</td>
		               <td>".$uinfo['uday']."/".$uinfo['umonth']."/".$uinfo['uyear']."</td>
		               <td> <a href=\"../../php/studentAddingController.php?id=".$uinfo['uid']."&add=yes\">Add</a> | <a href=\"../../php/studentAddingController.php?id=".$uinfo['uid']."&add=no\">Cancel</a></td>
		         </tr>";
	}

	

	$data .= "</table>";

	echo $data;

}


if(isset($_POST['tstat'])){

	$status = $_POST['tstat'];
	$id = $_COOKIE['id'];

	$r = getOid($id);

	//echo $r;

	

	$list = getJoinlistTeacher($r);
	//echo $list;


	$data = "<table border=1>
				<tr>
				    <td>Photo</td>
					<td>Name</td>
					<td>Email</td>
					<td>Phone No.</td>
					<td>Gender</td>
					<td>DOB</td>
					<td>Action</td>
				</tr>";

				

	for($i=0; $i != count($list); $i++){ 

		$uinfo = getById($list[$i]['tid']);
		//echo $uinfo['uname'];

		$data .= "<tr>
		               <td><img src=\"".$uinfo['uphoto']."\"></td>
		               <td>".$uinfo['uname']."</td>
		               <td>".$uinfo['uemail']."</td>
		               <td>".$uinfo['uphoneno']."</td>
		               <td>".$uinfo['ugender']."</td>
		               <td>".$uinfo['uday']."/".$uinfo['umonth']."/".$uinfo['uyear']."</td>
		               <td> <a href=\"../../php/teacherAddingController.php?id=".$uinfo['uid']."&tadd=yes\">Add</a> | <a href=\"../../php/teacherAddingController.php?id=".$uinfo['uid']."&tadd=no\">Cancel</a></td>
		         </tr>";
	}

	

	$data .= "</table>";

	echo $data;

}
































?>