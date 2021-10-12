<?php 
include 'dbconnect.php';
$id = $_GET['did'];
$sql = "DELETE FROM `user_ragistration` WHERE id= '$id '";
if($result = $conn->query($sql)){
	echo"<script>location.href='requester.php'</script>";
}
 ?>