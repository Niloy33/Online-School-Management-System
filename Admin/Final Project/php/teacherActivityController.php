<?php
	require_once('C:/xampp/htdocs/Final Project/php/sessionController.php');	
	require_once('../service/classService.php');
	require_once('../service/userService.php');



	function getClassList(){
				$id = $_COOKIE['id'];

	    $r = getOid($id);

	    $d = [

	    	'oid' => $r,
	    	'tid' => $id
	    ];
		$x = findTeacherClass($d);
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

	        return $data;
	}