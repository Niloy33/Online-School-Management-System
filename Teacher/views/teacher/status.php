<?php
include '../../db/db.php';
$con = dbConnection();

$status = $_GET['status'];
$id = $_GET['id'];

$sql = "UPDATE `task` SET `status`=$status WHERE id = $id";

mysqli_query($con, $sql);

echo "Status changed to " . ($status ? 'Open' : 'Closed');
