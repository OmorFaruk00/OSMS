<?php
include 'dbconnect.php';				
if(isset($_POST["assign"])){
	$request_id = $_POST["id"];
	$request_info = $_POST["request"];
	$request_desc = $_POST["desc"];
	$request_name = $_POST["name"];
	$request_add1 = $_POST["address1"];
	$request_add2 = $_POST["address2"];
	$request_city = $_POST["city"];
	$request_state = $_POST["state"];
	$request_zip = $_POST["zip"];
	$request_email = $_POST["email"];
	$request_mobile = $_POST["mobile"];
	$assign_tech = $_POST["asstech"];
	$assign_date = $_POST["date"];


	$sql = "SELECT * FROM `assign_work` WHERE request_id = '{$request_id}'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		$alert_message = "<div class='alert alert-danger text-center'>This Requests Already Assign...</div>"; 
		?>
		<script>window.location.href ="http://localhost/OSMS/Admin/requests.php?alert_message='<?php echo $alert_message;?>'"</script>
		<?php
	      }

	else{
		$sql1 = "INSERT INTO `assign_work`(`request_id`, `request-info`, `request-desc`, `request-name`, `request-add1`, `request-add2`, `request-city`, `request-state`, `request-zip`, `request-email`, `request-mobile`, `ass_tech`, `ass_date`) VALUES ('$request_id' ,'$request_info','$request_desc', '$request_name', '$request_add1', '$request_add2', '$request_city', '$request_state', '$request_zip', '$request_email', '$request_mobile','$assign_tech', '$assign_date')";
		if($conn->query($sql1) == TRUE){
			$alert_message = "<div class='alert alert-success text-center'>Assign Work Successfully...</div>";
			?>
			<script>window.location.href ="http://localhost/OSMS/Admin/requests.php?alert_message='<?php echo $alert_message;?>'"</script>
			<?php
		}
		else{
			$alert_message = "<div class='alert alert-danger text-center'>Assign Failed. Something Is Wrong</div>"; ?>
			<script>window.location.href ="http://localhost/OSMS/Admin/requests.php?alert_message='<?php echo $alert_message;?>'"</script>
			<?php		
		}
	}

}
?>

