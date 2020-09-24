<?php
session_start();

	require_once('../service/userService.php');

	//echo "hii";

	if(isset($_POST['submit'])){
		//echo "hii again";

		$email=$_POST['email'];

		if(empty($email)){
			//echo "empty";
			header('location: ../views/guardian/guardianAddStudent.php?error=null');
		}
		else{
			$r=getByEmail($email);
			if($r){

				


				
			}else{

				echo "No user found";

			}


		}
	}

?>