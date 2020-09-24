<?php

   session_start();
   
   

	if (isset($_POST['submit'])) {
		
		$uname  = $_POST['uname'];
		$email = $_POST['email'];
    $comments = $_POST['comments'];
	//	$taskfile = $_FILES['taskfile']['tmp_name'];
 

		if (empty($uname) || empty($email) || empty($comments)) {
			
			echo "null submition found";

			
			if(!ctype_alpha($uname))
			{
				echo "name can't contain numbers!!";
			}
			if((!strpos($email,'@')) || ((!strpos($email,'.'))))
			{
				echo "not a valid email address!";
			}
		


		}
		else
		{
			$connection = mysqli_connect('127.0.0.1','root','','webtech');
			$result = mysqli_query($connection,"INSERT INTO tasks (uname,email,comments) VALUES ('".$uname."','".$email."','".$comments."')");

      // echo $result;
       echo "upload successful";

       header('location:../fviews/home.html');
       
     // header('../../fviews/home.html');
		}
		
	}
	else
	{
		#header('location:login.php');
	}




?>