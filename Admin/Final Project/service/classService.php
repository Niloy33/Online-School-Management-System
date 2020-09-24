<?php
	
	require_once('C:/xampp/htdocs/Final Project/db/db.php');

	function createClass($user){
		$con = dbConnection();
		$sql = "insert into classinfo values('', '{$user['oid']}', '{$user['class']}', '{$user['session']}', '{$user['subject']}','{$user['section']}', '', '' )";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteClass($user){
		$con = dbConnection();
		$sql = "delete from classinfo where oid='{$user['oid']}' and class='{$user['class']}' and session='{$user['session']}' and subject='{$user['subject']}' and section='{$user['section']}'";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function setTid($data){
		$con = dbConnection();
		$sql = "update classinfo set tid='{$data['tid']}' where cid='{$data['cid']}'";
		$result = (mysqli_query($con, $sql));
		if($result){
			return true;
		}else{
			return false;
		}
	}

	function getClassId($user){
		$con = dbConnection();
		$sql = "select cid from classinfo where oid='{$user['oid']}' and class='{$user['class']}' and session='{$user['session']}' and subject='{$user['subject']}' and section='{$user['section']}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		if($result){
			return $row;
		}else{
			return "Error";
		}


	}

	function findAllTeacher($data){
		$con = dbConnection();
		$sql = "select * from organizationmembers where type='teacher' and oid='{$data}'";
		$result = mysqli_query($con, $sql);

		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		if(empty($result)==false){
			return $users;
		}else{
			return "error";
		}
	}

	function findAllStudent($data){
		$con = dbConnection();
		$sql = "select * from organizationmembers where type='student' and oid='{$data}'";
		$result = mysqli_query($con, $sql);

		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		if(empty($result)==false){
			return $users;
		}else{
			return "error";
		}
 
	}

	function findTeacherClass($data){
		$con = dbConnection();
		$sql = "select * from classinfo where oid='{$data['oid']}' and tid='{$data['tid']}'";
		$result = mysqli_query($con, $sql);

		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		if(empty($result)==false){
			return $users;
		}else{
			return "error";
		}

	}

	function setStoClass($data){
		$con = dbConnection();
		$sql = "insert into classlist values ('', '{$data['sid']}', '{$data['cid']}', '')";
		$result = mysqli_query($con, $sql);
		if($result){
			return true;
		}else{
			return false;
		}

	}

	function removeSfromClass($data){
		$con = dbConnection();
		$sql = "delete from classlist where sid='{$data['sid']}' and cid='{$data['cid']}'";
		$result = mysqli_query($con, $sql);
		if($result){
			return true;
		}else{
			return false;
		}

	}

	function searchClass($user){
		$con = dbConnection();
		$sql = "select count(*) from classinfo where oid='{$user['oid']}' and class='{$user['class']}' and session='{$user['session']}' and section='{$user['section']}' and subject='{$user['subject']}'";

		$r = mysqli_query($con, $sql);
		$d = mysqli_fetch_assoc($r);

		if(mysqli_query($con, $sql)){
			if($d['count(*)']>0)
			return true;
		
		}else{
			return false;
		}

	}

	function updateClass($user){
		$con = dbConnection();
		$sql = "update classinfo set oid='{$user['oid']}', class='{$user['class']}', session='{$user['session']}', section='{$user['section']}', subject='{$user['subject']}' where cid='{$user['cid']}'";
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

	function getJoinlistTeacher($r){
		$con = dbConnection();
		$sql = "select * from joinlistforteacher where oid='{$r}'";
		$result = mysqli_query($con, $sql);
		//$t = $result['sid'];
		//$sql2 = "select * from userinfo where uid='{$t}'";
		//$result2 = mysqli_query($con, $sql2);
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		if(empty($result)==false){
			return $users;
		}else{
			return "error";
		}
		


	}

	function getJoinlistStudent($r){

		$con = dbConnection();
		$sql = "select * from joinlistforstudent where oid='{$r}'";
		$result = mysqli_query($con, $sql);
		//$t = $result['sid'];
		//$sql2 = "select * from userinfo where uid='{$t}'";
		//$result2 = mysqli_query($con, $sql2);
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		if(empty($result)==false){
			return $users;
		}else{
			return "error";
		}
		

	}

	function addStudentToOrganization($data){

		$con = dbConnection();
		$sql = "insert into organizationmembers values('', '{$data['oid']}', '{$data['mid']}', 'Okay', 'student')";
		$result = mysqli_query($con, $sql);

		if($result){
			return true;
		}else{
			return false;
		}


	}

	function addTeacherToOrganization($data){

		$con = dbConnection();
		$sql = "insert into organizationmembers values('', '{$data['oid']}', '{$data['mid']}', 'Okay', 'teacher')";
		$result = mysqli_query($con, $sql);

		if($result){
			return true;
		}else{
			return false;
		}


	}

	function removeFromJoinList($id){
		$con = dbConnection();
		$sql = "delete from joinlistforstudent where sid='{$id}'";
		$result = mysqli_query($con, $sql);

		if($result){
			return true;
		}else{
			return false;
		}
		

	}

	function removeTeacherFromJoinList($id){
		$con = dbConnection();
		$sql = "delete from joinlistforteacher where tid='{$id}'";
		$result = mysqli_query($con, $sql);

		if($result){
			return true;
		}else{
			return false;
		}
		

	}

	function getOid($id){
		$con = dbConnection();
		$sql = "select oid from organizationinfo where admin_id='{$id}'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		if($result){
			return $row['oid'];
		}else{

			return "error";
		}




	}

	function getAllClass($id){
		$con = dbConnection();
		$sql = "select * from classinfo where oid='{$id}'";
	    $result = mysqli_query($con, $sql);
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		if(empty($result)==false){
			return $users;
		}else{
			return false;
		}
	}

	function noticeToGuardian($data){
		$con = dbConnection();
		$sql = "insert into adminnoticetoguardian values('', '{$data['gid']}', '{$data['date']}', '{$data['from']}', '{$data['sub']}', '{$data['notice']}', '{$data['oid']}')";
		$result = mysqli_query($con, $sql);
		if($result){
			return true;
		}else{
			return false;
		}

	}

	function getNoticeAdmin($id){
		$con = dbConnection();
		$sql = "select * from adminnoticetoguardian where gid='{$id}'";
		$result = mysqli_query($con, $sql);
		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		if(empty($result)==false){
			return $users;
		}else{
			return false;
		}


	}

		function getNoticeFromAdmin(){
	    	$id = $_COOKIE['id'];
	        //$r = getOid($id);
	        $x=getNoticeAdmin($id);
	        $data ="";

	        for($i=0; $i != count($x); $i++){

	        	$data .= "<fieldset>
	        	            <table>
	        	                <tr>
	        	                   <td>Date:".$x[$i]['date']."</td>
	        	                </tr>
	        	                <tr>
	        	                   <td>From:".$x[$i]['fromwho']."</td>
	        	                </tr>
	        	                <tr>
	        	                    <td>Subject:".$x[$i]['title']."</td>
	        	                </tr>
	        	                <tr>
	        	                    <td>Notice:".$x[$i]['notice']."</td> 
	        	                </tr>
	        	            </table>
	        	           </fieldset>";

	        }

	        return $data;
	    }

	    function removeFromOrganization($data){
	    $con = dbConnection();
		$sql = "delete from organizationmembers where oid='{$data['oid']}' and mid='{$data['sid']}'";
		$result = mysqli_query($con, $sql);
		if($result){
			return true;
		}else{
			return false;
		}

	    }

	    function setBlockStatus($data){
	    	$con = dbConnection();
	    	$sql = "update organizationmembers set status='{$data['status']}' where oid='{$data['oid']}' and mid='{$data['sid']}'";
	    			$result = mysqli_query($con, $sql);
		if($result){
			return true;
		}else{
			return false;
		}

	    }

	    function findAllStudent2($data){
		$con = dbConnection();
		$sql = "select * from organizationmembers where type='{$data['type']}' and oid='{$data['oid']}'";
		$result = mysqli_query($con, $sql);

		$users =[];
		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		};
		if(empty($result)==false){
			return $users;
		}else{
			return "error";
		}
 
	}

	    


?>