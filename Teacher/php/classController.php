<?php
	require_once('../service/userService.php');

	if(isset($_POST['create'])){

		
		$class = $_POST['class'];
		$session = $_POST['session'];
		$section = $_POST['section'];
		$subject = $_POST['subject'];

