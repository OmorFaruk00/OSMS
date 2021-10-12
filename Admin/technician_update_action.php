<?php 
include 'dbconnect.php';
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$sql = "UPDATE `technician` SET `tech_name`='$name',`tech_city`='$city',`tech_mobile`='$mobile',`tech_email`='$email' WHERE tech_id = '$id'";  

	if($result = $conn->query($sql)){
		$alert_message = "<div class='alert alert-danger text-center'>Update Successfull</div>";?>		
		<script>window.location.href ="technician_update.php?alert_message='<?php echo $alert_message;?>'"</script>
		<?php  	

	}else{		
		$alert_message = "<div class='alert alert-success text-center'>Not Updated</div>";?>			
		<script>window.location.href ="technician_update.php?alert_message='<?php echo $alert_message;?>'"</script>
		<?php
	}
}
// close button
if(isset($_POST['close'])){echo"<script>location.href='technician.php'</script>";}

?>