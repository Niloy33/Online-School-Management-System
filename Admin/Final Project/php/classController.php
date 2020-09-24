<?php
	require_once('C:/xampp/htdocs/Final Project/php/sessionController.php');	
	require_once('../service/classService.php');
	require_once('../service/userService.php');

	if(isset($_POST['stat'])){
		$class = $_POST['class'];
		$session = $_POST['session'];
		$section = $_POST['section'];
		$subject = $_POST['subject'];

		$id = $_COOKIE['id'];

	    $r = getOid($id);

	    $d = [

	    	'oid' => $r,
	    	'class' => $class,
	    	'session' => $session,
	    	'section' => $section,
	    	'subject' => $subject
	    ];

	    $y = searchClass($d);

	    if($y){
	    	echo "Class already exists.";
	    }else{

	    $x = createClass($d);

	    if($x){
	    	echo "Class created successfully.";
	    }else{
	    	echo "Some error occured.";
	    }
	}


	}

		if(isset($_POST['stat1'])){
		$class = $_POST['class'];
		$session = $_POST['session'];
		$section = $_POST['section'];
		$subject = $_POST['subject'];

		$id = $_COOKIE['id'];

	    $r = getOid($id);

	    $d = [

	    	'oid' => $r,
	    	'class' => $class,
	    	'session' => $session,
	    	'section' => $section,
	    	'subject' => $subject
	    ];

	    $cid = getClassId($d);

	    //echo $cid['cid'];

	    $x = deleteClass($d);

	    if($x){
	    	echo "Class deleted successfully.";
	    }else{
	    	echo "Some error occured.";
	    }


	}

			if(isset($_POST['stat2'])){
		$class = $_POST['class'];
		$session = $_POST['session'];
		$section = $_POST['section'];
		$subject = $_POST['subject'];

		$id = $_COOKIE['id'];

	    $r = getOid($id);
	    $cid = getClassId($d);

	    $d = [

	    	'oid' => $r,
	    	'class' => $class,
	    	'session' => $session,
	    	'section' => $section,
	    	'subject' => $subject,
	    	'cid' => $cid
	    ];

	    //$cid = getClassId($d);

	    //echo $cid['cid'];

	    $x = updateClass($d);

	    if($x){
	    	echo "Class deleted successfully.";
	    }else{
	    	echo "Some error occured.";
	    }


	}

	if(isset($_POST['stat3'])){
		$class = $_POST['class'];
		$session = $_POST['session'];
		$section = $_POST['section'];
		$subject = $_POST['subject'];

		$id = $_COOKIE['id'];

	    $r = getOid($id);

	    $d = [

	    	'oid' => $r,
	    	'class' => $class,
	    	'session' => $session,
	    	'section' => $section,
	    	'subject' => $subject
	    ];

	    $x = searchClass($d);

	    if($x){
	    	echo "Class exists. Successfully found.";
	    }else{
	    	echo "Class does not exist.";
	    }


	}

	if(isset($_POST['stat4'])){

		$id = $_COOKIE['id'];
	    $r = getOid($id);
	    $x = findAllTeacher($r);

	    $data = "<fieldset><legend>Add Teacher</legend>";

	    $data .= "<table border=\"\">
	                   <tr>
	                       <td>Name</td>
	                       <td>ID</td>
	                    </tr>";
	    

	    for($i=0; $i != count($x); $i++){
	    	$name = getNameById($x[$i]['mid']);

	    	$data .= "<tr>
	    	             <td>".$name."</td>
	    	             <td>".$x[$i]['mid']."</td>
	    	          </tr>";

	    }
	    $data .= "</table>";
	    $data .= "Teacher's ID: <input type=\"text\" id=\"tid\"> <input type=\"button\" onclick=\"addTeacherToClass()\" value=\"Add\">";
	    $data .= "<p id=\"ans\"></p></fieldset>"; 

	    

	    echo $data;


	    	 //<td>".$uinfo['uname']."</td>
		     //<td>".$uinfo['uemail']."</td>


	    }

	    if (isset($_POST['stat5'])) {
	    	$id = $_COOKIE['id'];
	    $r = getOid($id);
	    	$class = $_POST['class'];
	    	$session = $_POST['session'];
	    	$section = $_POST['section'];
	    	$subject = $_POST['subject'];
	    	$tid = $_POST['tid'];

	    	//echo $tid;
	    	

	    	$data = [
	    		'oid' => $r,
	    		'class' => $class,
	    		'session' => $session,
	    		'section' => $section,
	    		'subject' => $subject,
	    	];



	    	$x = getClassId($data);

	    	//echo $x['cid'];

	        $data2 = [
	    		'cid' => $x['cid'],
	    		'tid' => $tid
	    	];

	    	$y = setTid($data2);


	    	if($y){
	    		echo "Added Succesfully";
	    	}else{
	    		echo "There was some error";
	    	}



	    }

	    if(isset($_POST['stat6'])){
	    $id = $_COOKIE['id'];
	    $r = getOid($id);
	    $x = findAllStudent($r);

	    $data = "<fieldset><legend>Add Student</legend>";

	    $data .= "<table border=\"\">
	                   <tr>
	                       <td>Name</td>
	                       <td>ID</td>
	                    </tr>";
	    

	    for($i=0; $i != count($x); $i++){
	    	$name = getNameById($x[$i]['mid']);

	    	$data .= "<tr>
	    	             <td>".$name."</td>
	    	             <td>".$x[$i]['mid']."</td>
	    	          </tr>";

	    }
	    $data .= "</table>";
	    $data .= "Student's ID: <input type=\"text\" id=\"sid\"> <input type=\"button\" onclick=\"addStudentToClass()\" value=\"Add\"> <input type=\"button\" onclick=\"removeStudent()\" value=\"Remove\">" ;
	    $data .= "<p id=\"sans\"></p></fieldset>"; 

	    

	    echo $data;

	    }

	    if (isset($_POST['stat7'])) {
	    $id = $_COOKIE['id'];
	    $r = getOid($id);
	    	$class = $_POST['class'];
	    	$session = $_POST['session'];
	    	$section = $_POST['section'];
	    	$subject = $_POST['subject'];
	    	$sid = $_POST['sid'];

	    	//echo $tid;
	    	

	    	$data = [
	    		'oid' => $r,
	    		'class' => $class,
	    		'session' => $session,
	    		'section' => $section,
	    		'subject' => $subject,
	    	];



	    	$x = getClassId($data);

	    	//echo $sid;

	        $data2 = [
	    		'cid' => $x['cid'],
	    		'sid' => $sid
	    	];

	    	//echo $x['cid'];

	    	$y = setStoClass($data2);


	    	if($y){
	    		echo "Added Succesfully";
	    	}else{
	    		echo "There was some error";
	    	}
	    	
	    }

	    if (isset($_POST['stat10'])) {
	    $id = $_COOKIE['id'];
	    $r = getOid($id);
	    	$class = $_POST['class'];
	    	$session = $_POST['session'];
	    	$section = $_POST['section'];
	    	$subject = $_POST['subject'];
	    	$sid = $_POST['sid'];

	    	//echo $tid;
	    	

	    	$data = [
	    		'oid' => $r,
	    		'class' => $class,
	    		'session' => $session,
	    		'section' => $section,
	    		'subject' => $subject,
	    	];



	    	$x = getClassId($data);

	    	//echo $sid;

	        $data2 = [
	    		'cid' => $x['cid'],
	    		'sid' => $sid
	    	];

	    	//echo $x['cid'];

	    	$y = removeSfromClass($data2);


	    	if($y){
	    		echo "Removed Succesfully";
	    	}else{
	    		echo "There was some error";
	    	}
	    	
	    }

	    if(isset($_POST['stat8'])){
	    	$id = $_COOKIE['id'];
	        $r = getOid($id);
	        //echo $r;

	        $x =getAllClass($r);

	        //echo $x[0]['class'];
	        //$y = mysqli_fetch_assoc($x);
	        //echo $y[0]['class'];
	        $data = "<table border=\"\">
	                   <tr>
	                       <td>Class</td>
	                       <td>Session</td>
	                       <td>Subject</td>
	                       <td>Section</td>
	                       <td>ID</td>
	                    </tr>";

	        for($i=0; $i != count($x); $i++){
	        	$data .= "<tr><td>".$x[$i]['class']."</td>
	        	            <td>".$x[$i]['session']."</td>
	        	            <td>".$x[$i]['subject']."</td>
	        	            <td>".$x[$i]['section']."</td>
	        	            <td>".$x[$i]['cid']."</td></tr>";

	        }
	        $data .= "</table>";

	        if ($x) {
	        	echo $data;
	        }else
	        {
	        	echo "error";
	        }
	    

	    }

	    if(isset($_POST['stat9'])){
	    	$id = $_COOKIE['id'];
	        $r = getOid($id);

	        $x = findAllStudent($r);
	        //echo $x[0]['mid'];

	        for($i=0; $i != count($x); $i++){

	        	$y=getGuardianId($x[$i]['mid']);
	        	//echo $y;
	        	//echo " ";

	        	$data = [
	        		'gid' => $y,
	        		'date' => $_POST['date'],
	        		'from' => $_POST['from'],
	        		'sub' => $_POST['sub'],
	        		'notice' => $_POST['notice'],
	        		'oid' => $r
	        	];

	        	$z = noticeToGuardian($data);
	        	//echo $z;

	        	/*if($z){

	        		$s = true;

	        	}else{
	        		$s = false;
	        		break;
	        	}*/
	        }
	        if($z){
	        	echo "All notices sent";
	        }else{
	        	echo "Some error occured";
	        }
	    }

	    if(isset($_POST['stat11'])){
	    	$id = $_COOKIE['id'];
	        $r = getOid($id);
	        //ame = $_POST['name'];
	        $data = [
	        	'oid'=> $r,
	        	//'name' => $name,
	        	'type' => 'student'
	        ];
	        $x = findAllStudent2($data);

	        $data = "<table border=\"\">
	                   <tr>
	                       <td>ID</td>
	                    </tr>";

	        for($i=0; $i != count($x); $i++){
	        	$data .= "<tr><td>".$x[$i]['mid']."</td></tr>";

	        }
	        $data .= "</table>";

	        if($x){
	        	echo $data;
	        }else{
	        	echo "No student added";
	        }
	    }

	    if (isset($_POST['remove_submit'])) {
	    	if(empty($_POST['sid'])){

	    	echo "Student Id cannot be empty";
	    	}elseif(!is_numeric($_POST['sid'])){
	    		echo "Student Id must be numeric";

	    	}else{
	    	$sid = $_POST['sid'];
	    	$id = $_COOKIE['id'];
	        $r = getOid($id);

	        $data = [
	        	'sid'=>$sid,
	        	'oid'=>$r
	        ];

	        $x=removeFromOrganization($data);

	        if($x){
	        	header('location: ../views/admin/adminStudents.php');

	        }else{

	        }
	    }




	    }

	    if(isset($_POST['block_Submit'])){
	    	if(empty($_POST['sid'])){

	    	echo "Student Id cannot be empty";
	    	}elseif(!is_numeric($_POST['sid'])){
	    		echo "Student Id must be numeric";

	    	}else{
	    	$sid = $_POST['sid'];
	    	$id = $_COOKIE['id'];
	        $r = getOid($id);

	        $data = [
	        	'sid'=>$sid,
	        	'oid'=>$r,
	        	'status'=>$_POST['blockstatus']
	        ];

	        $x = setBlockStatus($data);

	        if($x){
	        	header('location: ../views/admin/adminStudents.php');
	        }else{
	        	return false;
	        }

	    	}

	    }

	    if (isset($_POST['remove_submitt'])) {
	    	if(empty($_POST['sid'])){

	    	echo "Student Id cannot be empty";
	    	}elseif(!is_numeric($_POST['sid'])){
	    		echo "Student Id must be numeric";

	    	}else{
	    	$sid = $_POST['sid'];
	    	$id = $_COOKIE['id'];
	        $r = getOid($id);

	        $data = [
	        	'sid'=>$sid,
	        	'oid'=>$r
	        ];

	        $x=removeFromOrganization($data);

	        if($x){
	        	header('location: ../views/admin/adminStudents.php');

	        }else{

	        }
	    }
	    



	    }

	    if(isset($_POST['block_Submitt'])){
	    	if(empty($_POST['sid'])){

	    	echo "Student Id cannot be empty";
	    	}elseif(!is_numeric($_POST['sid'])){
	    		echo "Student Id must be numeric";

	    	}else{
	    	$sid = $_POST['sid'];
	    	$id = $_COOKIE['id'];
	        $r = getOid($id);

	        $data = [
	        	'sid'=>$sid,
	        	'oid'=>$r,
	        	'status'=>$_POST['blockstatus']
	        ];

	        $x = setBlockStatus($data);

	        if($x){
	        	header('location: ../views/admin/adminStudents.php');
	        }else{
	        	return false;
	        }

	    	}

	    }









	





?>

