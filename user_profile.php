<?php 
define('TITLE', 'Profile');
define('PAGE', 'RequesterProfile');
include "user_header.php";
include "Database.php";

if(isset($_POST['update'])){
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	$sql="UPDATE `user_ragistration` SET  name = '$name', `email`='$email' WHERE email = '".$_SESSION['email']."'";

	if($conn->query($sql) == TRUE){

		$alert_message = "<div class='alert alert-success mt-3 text-center'> Profile Update Successfull..</div>";
	}

}

?>

<!-- Start Profile Area 2st column -->
<div class="col-sm-4 mt-3 ml-5 ">
	<form action="" method="POST"> 
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control mb-2" value="<?php echo  $_SESSION['name']; ?>" name="name" required>

			<label for="">Email</label>
			<input type="text" class="form-control mb-3" value="<?php echo  $_SESSION['email']; ?>" name="email" required>

			<?php if(isset($alert_message)){ echo $alert_message; } ?>

			<button class="btn btn-danger" name="update">Update</button>
		</div>
	</form>
</div>
<!-- End Profile Area 2st column -->


<?php include "user_footer.php"; ?>