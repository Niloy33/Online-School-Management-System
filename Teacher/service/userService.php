<?php
	
	require_once('../db/db.php');
	
	function getById($id){
		$con = dbConnection();
		$sql = "select * from users where id='{$id}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getByEmail($email){
		$con = dbConnection();
		$sql = "select * from userinfo where uemail='{$email}' and utype='student'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

		function getidByEmail($email){
		$con = dbConnection();
		$sql = "select uid from userinfo where uemail='{$email}' and utype='admin'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	
	function getAllUser(){
		$con = dbConnection();
		$sql = "select * from users";
		$result = mysqli_query($con, $sql);
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		return $users;
	}

	function getCookieValue($user){
		$con = dbConnection();
		$sql = "select uid, uname, utype from userinfo where uemail='{$user['email']}' and upassword='{$user['password']}'";
		$result = mysqli_query($con, $sql);
		$users =[];
		$row = mysqli_fetch_assoc($result);
		array_push($users, $row);
		return $users;
	}

	function validate ($user){
		$con = dbConnection();
		$sql = "select count(*) from userinfo where uemail='{$user['email']}' and upassword='{$user['password']}'";

		$r = mysqli_query($con, $sql);
		// print_r($r->num_rows);
		if($r->num_rows >= 1){
			return true;
		}else{
			return false;
		}
	}

	function create($user){
		$con = dbConnection();
		$sql = "insert into userinfo values('', '{$user['name']}', '{$user['email']}', '{$user['phoneno']}', '{$user['password']}', '{$user['gender']}', '{$user['day']}', '{$user['month']}', '{$user['year']}', '{$user['type']}', '{$user['photo']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function uniqueEmailCheck($user){
		$con = dbConnection();
		$sql = "select count(uemail) from userinfo where uemail='{$user['email']}'";

		$r = mysqli_query($con, $sql);
		$d = mysqli_fetch_assoc($r);

		if(mysqli_query($con, $sql)){
			if($d['count(uemail)']<1)
			return true;
		}else{
			return false;
		}


	}

	function update($user){
		$con = dbConnection();
		$sql = "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>