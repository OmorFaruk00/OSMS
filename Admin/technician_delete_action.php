<?php 
include 'dbconnect.php';
$id = $_GET['did'];
$sql = "DELETE FROM `technician` WHERE tech_id= '$id '";
if($result = $conn->query($sql)){
	header("Location:http://localhost/OSMS/Amdin/technician.php");
}
 ?>