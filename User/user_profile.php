<?php 
include"header.php"; 
session_start();

?>

<!-- Start Profile Area 1st column -->
<div class="col-sm-6 mt-3 ml-5">
	<form action="" method="POST"> 
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" class="form-control mb-2" value="<?php echo  $_SESSION['name']; ?>" name="name" required>

			<label for="">Email</label>
			<input type="text" class="form-control mb-3" value="<?php echo  $_SESSION['email']; ?>" name="email" required>

			<button class="btn btn-danger" name="update">Update</button>
		</div>
	</form>
</div>


<!-- End Profile Area 2st column -->


<?php include"footer.php"; ?>