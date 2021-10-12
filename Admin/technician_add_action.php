<?php 
include 'dbconnect.php';
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$city = $_POST['city'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];

	$sql1 = "SELECT * FROM `technician` WHERE tech_email = '{$email}'";
	$result1 = $conn->query($sql1);
	if($result1->num_rows > 0){
		$alert_message = "<div class='alert alert-danger text-center'>This Email Already Assign. Try Enother Email</div>"; ?>
		<script>window.location.href ="technician.php?alert_message='<?php echo $alert_message;?>'"</script>
		<?php  	

	}else{
		$sql = "INSERT INTO `technician`(`tech_name`, `tech_city`, `tech_mobile`, `tech_email`) VALUES ('$name','$city', '$mobile', '$email')";
		if($conn->query($sql) == TRUE){
			$alert_message = "<div class='alert alert-success text-center'>Add Successfully...</div>";
			?>
			<script>window.location.href ="technician.php?alert_message='<?php echo $alert_message;?>'"</script>
			<?php
		}	
	}
}

 ?>