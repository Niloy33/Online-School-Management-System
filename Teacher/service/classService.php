<?php
	
	require_once('../db/db.php');

	function createClass($user){
		$con = dbConnection();
		$sql = "insert into classinfo values('', '{$user['name']}', '{$user['email']}', '{$user['phoneno']}', '{$user['password']}', '{$user['gender']}', '{$user['day']}', '{$user['month']}', '{$user['year']}', '{$user['type']}', '{$user['photo']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function createOrg($org){

		$con = dbConnection();
		$sql = "insert into organizationinfo values('', '{$org['oname']}', '{$org['ophone1']}', '{$org['ophone2']}', '{$org['oemail']}', '{$org['oaddress']}', '{$org['owebsite']}', '{$org['opc']}', '{$org['ocity']}', '{$org['ologo']}', '{$org['admin_id']}')";


		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}

	}

	function getJoinlistStudent(){

		$con = dbConnection();
		$sql = "select * from joinlistforstudent";
		$result = mysqli_query($con, $sql);
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		return $users;
	}
