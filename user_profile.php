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
		$alert_message = "<div class='alert alert-danger text-center'>Profile Update Successfully..</div>"; ?>   
		<script>window.location.href ="user_profile.php?alert_message='<?php echo $alert_message;?>'"</script>
		<?php 	
	}
}

?>

<!-- Start Profile Area 2st column -->
<div class="col-sm-3 mt-3 ml-5">
	<form action="" method="POST"> 
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control mb-2" value="<?php echo  $_SESSION['name']; ?>" name="name" required>

			<label for="">Email</label>
			<input type="text" class="form-control mb-3" value="<?php echo  $_SESSION['email']; ?>" name="email" required>
			<?php if(isset($_GET['alert_message'])){echo $_GET['alert_message'];          
			echo"<script>setTimeout(function(){ window.location.href ='user_profile.php'; }, 2000); </script>";  } ?>

			<button class="btn btn-danger" name="update">Update</button>
		</div>
	</form>
</div>
<!-- End Profile Area 2st column -->


<?php include "user_footer.php"; ?>