<?php

	require_once('C:/xampp/htdocs/Final Project/php/sessionController.php');
	require_once('../service/userService.php');

	//echo "hii";
	if (isset($_POST['id'])) {

		
		$email = $_POST['semail'];

		$id = $_COOKIE['id'];
		$r=getidByEmailOthers($email);

		$user = [

			'gid' => $id,
			'sid' => $r['uid']

		];

		$x = addStudentBuGuardian($user);

		if($x) {
			echo "Added";
		}
		 



	}

	if(isset($_POST['email'])){
		//echo "hii again";

		$email=$_POST['email'];
		//echo $email;

		if(empty($email)){
			//echo "empty";
			//header('location: ../views/guardian/guardianAddStudent.php?error=null');
		}
		else{
			$r=getByEmail($email);
			if($r){



				echo "Student is found!";

							//header('location: ../views/guardian/guardianAddStudent.php?isfound=Studentfound');


				
			}else{

				//echo "error";

				//header('location: ../views/guardian/guardianAddStudent.php?error=Studentnotfound');

			}


		}
	}

	if(isset($_POST['name'])){
		//echo "hii";
	$name = $_POST['name'];

	$result = getAllOrg();

	//echo $result[0]['oname'];
	


    $data = "<table border=1>
				<tr>
				    
				    <td>Name</td>
					<td>Phone No. 1</td>
					<td>Phone No. 1</td>
					<td>Email</td>
					<td>Join</td>
				</tr>";

				for($i=0; $i != count($result); $i++ ){ 
			$data .= "<tr>
			         
				<td>".$result[$i]['oname']."</td>
				<td>".$result[$i]['ocno1']."</td>
				<td>".$result[$i]['ocno2']."</td>
				<td>".$result[$i]['oemail']."</td>
				<td>
					<a href=\"joinConfirm.php?id=".$result[$i]['oid']."\"> Join</a> 

				</td>
			</tr>";
		}

	

	$data .= "</table>";

	echo $data;
	}

	if (isset($_POST['gid'])) {
		$ids = $_COOKIE['id'];
		echo $ids;
	}

	if(isset($_POST['pid'])){

		$data = [

			'sid' => $_POST['pid'], 
			'oid' => $_POST['oid']

		];

		$p = sendJoinRequest($data);

		//echo $p;
		if($p){
			echo "Request sent successfully";
		}else{
			echo "There was some error. Try again later.";
		}

		//$result = sendJoinRequest($data);

		//if($result){

		//	echo "Join request sent successfully";

		//}else{

		//	echo "There was some error, please try again later.";


		//}



	}





?>