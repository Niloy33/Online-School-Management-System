<?php
include '../../db/db.php';
$con = dbConnection();

$id = $_GET['id'];
$sql = "DELETE FROM `task` WHERE id = $id";
$notices = mysqli_query($con, $sql);

header('location: all_task.php');