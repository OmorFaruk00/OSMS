<?php 
define('TITLE', 'product Add');
define('PAGE', 'Assets');
include "dashbord_header.php";
if(!isset($_SESSION['admin_login'])){echo"<script>location.href='index.php'</script>";}
?>
<div class="col-sm-6">		
	<form action="product_add_action.php" method="POST" class="jumbotron offset-4 mt-3">
		<?php if(isset($_GET['alert_message'])){echo $_GET['alert_message'];	
		echo'<script>setTimeout(function(){window.location.href ="assets.php";}, 2000);</script>';} ?>
		<h2 class="text-center ">Add Product</h2>
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" name="name" required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">DOP</label>
			<input type="date" name="dop" required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Available</label>
			<input type="text" name="ava" required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Total</label>
			<input type="text" name="total" required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Original Cost</label>
			<input type="text" name="original" required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Selling  Cost</label>
			<input type="text" name="sell" required class="form-control">				
		</div>
		<div>
			<button class="btn btn-danger mr-2" name="add" value="submit">Save</button>	
			
						
		</div>			
	</form>
</div>
<?php include'dashbord_footer.php' ?>