<?php

session_start();
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$filedir = '../db/upload/'.$_FILES['userphoto']['name'];
		move_uploaded_file($_FILES['userphoto']['tmp_name'], $filedir);

		$name 		= $_POST['name']; 
		$email 		= $_POST['email'];
		$phoneNo 	= $_POST['phoneNo'];
		$password 	= $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$gender 	= $_POST['gender'];
		$day 	= $_POST['day'];
		$month 	= $_POST['month'];
		$year 	= $_POST['year'];
		$type 	= $_POST['usertype'];
		
		$photo 	= $filedir;



		if(empty($name) || empty($email) || empty($phoneNo) || empty($password) || empty($confirmPassword) || empty($gender) || empty($day) || empty($month) || empty($year) || empty($type) || empty($photo) ){
			header('location: ../views/signup.php?error=null');
			//echo "error1";

			
		}
		else{

			$user = [
				'name'	=>$name,
				'email'		=>$email,
				'phoneno'	=>$phoneNo,
				'password'	=>$password,
				'gender'	=>$gender,
				'day'	=>$day,
				'month'	=>$month,
				'year'	=>$year,
				'type'	=>$type,
				'photo'	=>$photo
			];

			$status = create($user);
		
			if($status){
				//echo "Success";
				if($type == 'admin'){
					$id = getidByEmail($email);
					$_SESSION['admin_id'] = $id['uid'];


					header('location: ../views/Organization.php?msg=success');

					//$_SESSION['admin_id'] = $id[];

				}else{
				header('location: ../views/login.php?msg=success');
			}

			}else{
				header('location: ../views/signup.php?error=dberror');
				//echo "Error2";
			}

		} 
	}




		
	
?>