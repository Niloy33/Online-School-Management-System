<?php
	session_start();

	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email) || empty($password)){
			header('location: ../views/login.php?error=null');
		}
		elseif ((!strpos($email, '@')) || ((!strpos($email, '.'))))
		{
				echo "not a valid email address!\n";				
		}else{

			$user = [
				'email'=>$email,
				'password'=>$password
			];

			$status = validate($user);

			if($status){
				//echo "Home";
				$status = 'connected';
				$cVal = getCookieValue($user);
				setcookie("id", $cVal[0]['uid'], time() + (86400 * 30), "/");
				setcookie("name", $cVal[0]['uname'], time() + (86400 * 30), "/");
				setcookie("type", $cVal[0]['utype'], time() + (86400 * 30), "/");

				if($cVal[0]['utype']=='admin'){
					header('location: ../views/admin/adminHome.php');
				}elseif ($cVal[0]['utype']=='guardian') {
					header('location: ../views/guardian/guardianHome.php');
				}elseif ($cVal[0]['utype']=='student') {
					header('location: ../views/student/studentHome.php');
				}else{
					header('location: ../views/teacher/teacherHome.php');
				}
				
				

				$_SESSION['status'] = $status;
				//header('location: ../views/home.php');

			}else{
				echo "Error";
				//header('location: ../views/login.php?error=invalid');
			}
		}
		
	}
?>