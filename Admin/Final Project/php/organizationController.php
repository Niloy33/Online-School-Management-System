<?php
session_start();
	require_once('../service/classService.php');




		if(isset($_POST['osubmit'])){

		$filedir = '../../db//upload/'.$_FILES['logo']['name'];
		move_uploaded_file($_FILES['logo']['tmp_name'], $filedir);

		$oname 		= $_POST['oname']; //echo $oname;
		$ophone1 		= $_POST['ophone1'];
		$ophone2 	= $_POST['ophone2'];
		$oemail 	= $_POST['oemail'];
		$oaddress = $_POST['oaddress'];
		$owebsite 	= $_POST['owebsite'];
		$opc 	= $_POST['opc'];
		$ocity 	= $_POST['ocity'];
		$ologo 	= $filedir;
		$org_admin = $_SESSION['admin_id'];

		if(empty($oname) || empty($oemail) || empty($ophone1) || empty($ophone2) || empty($oaddress) || empty($owebsite) || empty($opc) || empty($ocity) || empty($ologo) || empty($org_admin)){
			echo "null submission found!\n";

		}
		else
		{
			if(!is_numeric($ophone1))
		{
				echo "invalid phone number!\n";
		}elseif(!is_numeric($ophone2))
		{
				echo "invalid phone number!\n";
		}elseif ((!strpos($oemail, '@')) || ((!strpos($oemail, '.'))))
		{
				echo "not a valid email address!\n";				
		}else{
			$org = [

				'oname' => $oname,
				'ophone1' => $ophone1,
				'ophone2' => $ophone2,
				'oemail' => $oemail,
				'oaddress' => $oaddress,
				'owebsite' => $owebsite,
				'opc' => $opc,
				'ocity'=> $ocity,
				'ologo' => $ologo,
				'admin_id' =>$org_admin
			];

			$status = createOrg($org);
		
			if($status){
				//echo "Success";

				header('location: ../views/login.php?msg=success');
			}else{
				header('location: ../views/signup.php?error=dberror');
				//echo "Error2";
			}

		} }
	}

	?>






			
		
