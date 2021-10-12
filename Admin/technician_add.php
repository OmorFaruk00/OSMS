<?php 
define('TITLE', 'Technician');
define('PAGE', 'Technician');
include "dashbord_header.php";
if(!isset($_SESSION['admin_login'])){echo"<script>location.href='index.php'</script>";}
?>
	<div class="col-sm-6">		
		<form action="technician_add_action.php" method="POST" class="jumbotron offset-4 mt-5">
			<h2 class="text-center ">Add Technician</h2>
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" name="name" required class="form-control">				
			</div>
			<div class="form-group">
				<label for="">City</label>
				<input type="text" name="city" required class="form-control">				
			</div>
			<div class="form-group">
				<label for="">Mobile</label>
				<input type="text" name="mobile" required class="form-control">				
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" required class="form-control">				
			</div>
			<div>
				<button class="btn btn-primary mr-2" name="submit" value="submit">Submit</button>
				<button class="btn btn-danger" name="close">Close</button>
			</div>
			
		</form>
	</div>
<?php include'dashbord_footer.php' ?>