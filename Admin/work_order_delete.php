<?php 
include 'dbconnect.php';
session_start();
if(!isset($_SESSION['admin_login'])){
	header("Location:http://localhost/OSMS/Admin/"); }
	$id = $_GET['id'];
	$sql = "DELETE FROM `assign_work` WHERE request_id = '$id'";
	$result = $conn->query($sql);
	header("Location:http://localhost/OSMS/Admin/work_order.php");
	?>