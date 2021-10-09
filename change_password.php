<?php
define('TITLE', 'Change Password');
 define('PAGE', 'ChangePassword');
include "user_header.php";
include "Database.php";

if(isset($_POST['update'])){
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn,md5($_POST['password']));

	$sql="UPDATE `user_ragistration` SET `password`='$password' WHERE email = '".$_SESSION['email']."'";

	if($conn->query($sql) == TRUE){

		$alert_message = "<div class='alert alert-success mt-3 text-center'> Change Password Successfull..</div>";
	}

}

?>


<div class="col-sm-10 col-md-8 mt-3 ml-5">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"> 
		<div class="form-group">
			
			<label for="">Email</label>
			<input type="text" class="form-control mb-3" value="<?php echo  $_SESSION['email']; ?>" name="email" required>

			<label for="">New Password</label>
			<input type="password" class="form-control mb-2" value="" name="password" required>

			<?php if(isset($alert_message)){ echo $alert_message; } ?>

			<button class="btn btn-danger mt-2 mr-2" name="update">Update</button>
			<button class="btn btn-success mt-2" name="reset">Reset</button>
		</div>
	</form>
</div>

<?php include "user_footer.php"; ?>
