<?php 
define('TITLE', 'product Update');
define('PAGE', 'Assets');
include "dashbord_header.php";
include 'dbconnect.php';
if(!isset($_SESSION['is_login'])){header("Location:http://localhost/OSMS/");}
$row['p_name'] = '';
$row['p_dop'] = '';
$row['p_available'] = '';
$row['p_total'] = '';
$row['p_original_cost'] = '';
$row['p_selling_cost'] = '';
if(isset($_POST["edit"])){
	$sql = "SELECT * FROM `asset` WHERE p_id = '{$_POST['id']}'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
}?>
<div class="col-sm-6">		
	<form action="product_update_action.php" method="POST" class="jumbotron offset-4 mt-3">
		<?php if(isset($_GET['alert_message'])){echo $_GET['alert_message'];	
		echo'<script>setTimeout(function(){window.location.href ="assets.php";}, 2000);</script>';} ?>
		<h2 class="text-center ">Update Product</h2>

		<input type="hidden" name="id" value="<?php echo $row['p_id']; ?>">				

		<div class="form-group">
			<label for="">Name</label>
			<input type="text" name="name" value="<?php echo $row['p_name']; ?>" required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">DOP</label>
			<input type="date" name="dop" value="<?php echo $row['p_dop']; ?>" required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Available</label>
			<input type="text" name="ava" value="<?php echo $row['p_available']; ?>" required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Total</label>
			<input type="text" name="total" value="<?php echo $row['p_total']; ?>" required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Original Cost</label>
			<input type="text" name="original" value="<?php echo $row['p_original_cost']; ?>" required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Selling  Cost</label>
			<input type="text" name="sell" value="<?php echo $row['p_selling_cost']; ?>" required class="form-control">				
		</div>
		<div>
			<button class="btn btn-primary mr-2" name="update" value="submit">Update</button>
			<button class="btn btn-danger mr-2" name="close" value="submit">Close</button>							
		</div>			
	</form>
</div>
<?php include'dashbord_footer.php' ?>