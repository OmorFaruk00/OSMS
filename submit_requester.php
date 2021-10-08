<?php 
define('TITLE', 'Submit Requester ');
include "user_header.php"; 
include "Database.php";
if(isset($_POST["submit"])){


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
	$request_date = $_POST["date"];

	$sql = "INSERT INTO `submit_requester`(`request-info`, `request-desc`, `request-name`, `request-add1`, `request-add2`, `request-city`, `request-state`, `request-zip`, `request-email`, `request-mobile`, `request-date`) VALUES ('$request_info','$request_desc', '$request_name', '$request_add1', '$request_add2', '$request_city', '$request_state', '$request_zip', '$request_email', '$request_mobile','$request_date')";


	if($conn->query($sql) == TRUE){

		$last_id = $conn->insert_id;

		$_SESSION['last_id'] = $last_id;
		echo $_SESSION['last_id'] ;

		$alert_message = "<div class='alert alert-danger text-center'>Request Successfull...</div>";

		header("Location:http://localhost/OSMS/submit_request_success.php");

	}

	else{
		$alert_message = "<div class='alert alert-danger mt-2'>Request Failed. Something Is Wrong</div>";
	}
}


?>


<div class="col--sm-8  col-md-9  ml-5">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		<div class="form-group">
			<label for="">Request Info</label>
			<input type="text" class="form-control" placeholder="Request Info" name="request" required>	
		</div>

		<div class="form-group">
			<label for="">Description</label>
			<input type="text" class="form-control" placeholder="Write Description" name="desc" required>	
		</div>

		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control" placeholder="Write Name" name="name" required>	
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="">Address Line 1</label>
				<input type="text" class="form-control" placeholder="House No " name="address1" required>
			</div>
			<div class="form-group col-md-6">
				<label for="">Address Line 1</label>
				<input type="text" class="form-control" placeholder="Colony Name" name="address2" required>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="">City</label>
				<input type="text" class="form-control"  name="city" required>
			</div>
			<div class="form-group col-md-4">
				<label for="">State</label>
				<input type="text" class="form-control"  name="state" required>
			</div>
			<div class="form-group col-md-2">
				<label for="">Zip</label>
				<input type="text" class="form-control"  name="zip" required>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="">Email</label>
				<input type="email" class="form-control"  name="email" required>
			</div>
			<div class="form-group col-md-4">
				<label for="">Mobile</label>
				<input type="text" class="form-control"  name="mobile" required>
			</div>
			<div class="form-group col-md-2">
				<label for="">Date</label>
				<input type="date" class="form-control"  name="date">
			</div>
		</div>
		<?php if(isset($alert_message)){ echo $alert_message; } ?>

		<button class="btn btn-danger mr-3 mt-2" name="submit">Submit</button>
		<button class="btn btn-primary mt-2" name="reset">Reset</button>



	</form>

</div>


<!-- only number for input fild -->


<!-- <script>
	function isInputNumber(evt){
		var ch = String.formCharCode(evt.which);
		if(!(/[0-9]/.test(ch))){
			evt.preventDefault();
		}
	}
	

</script>
-->




<?php include "user_footer.php"; ?>


