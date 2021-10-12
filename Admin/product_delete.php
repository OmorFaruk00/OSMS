<?php 
include 'dbconnect.php';
if(isset($_POST['delete'])){
	$sql = "DELETE FROM `asset` WHERE p_id = '{$_POST['id']}'";
	if($result = $conn->query($sql)){
	echo "<script> location.href='assets.php'</script>";
 }
}
 ?>