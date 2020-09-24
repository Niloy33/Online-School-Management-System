<?php
	require_once('C:/xampp/htdocs/Final Project/php/sessionController.php');
	require_once('../service/classService.php');
	require_once('../service/userService.php');

	

if($_GET['add']=='yes'){

	$mid = $_GET['id'];




	$oid = getOid($_COOKIE['id']);
	echo $oid;

	$data = [
		'mid' => $mid,
		'oid' => $oid
	];

	$x = addStudentToOrganization($data);

	if($x){

		//echo $oid;

		echo "Added successfully";
	}else{
		echo "Error";
	}

}

if($_GET['add']=='no'){

	$mid = $_GET['id'];
	//echo $mid;

	$y = removeFromJoinList($mid);

	if($y){
		echo "Removed";
	}
	else{
		echo "Error";
	}


}






?>