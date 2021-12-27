<?php 
define('TITLE', 'Product Sell');
define('PAGE', 'Assets');
include "dashbord_header.php";
include 'dbconnect.php';
if(!isset($_SESSION['is_login'])){header("Location:http://localhost/OSMS/");}
if(isset($_POST["sell"])){
	$sql = "SELECT * FROM `asset` WHERE p_id = '{$_POST['id']}'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
}?>
<div class="col-sm-6">		
	<form action="product_sell_action.php" method="POST" class="jumbotron offset-4 mt-3">
		<?php if(isset($_GET['alert_message'])){echo $_GET['alert_message'];	
		echo'<script>setTimeout(function(){window.location.href ="assets.php";}, 2000);</script>';} ?>
		<h2 class="text-center ">Customer Bill</h2>
		<div class="form-group">
			<label for="">Product ID</label>
			<input type="text" readonly name="id" value="<?php echo $row['p_id']; ?>" required class="form-control ml-2">			
		</div>		
		<div class="form-group">
			<label for="">Customer Name</label>
			<input type="text" name="c_name"  required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Customer Address</label>
			<input type="text" name="c_address"  required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Product Name</label>
			<input type="text" name="p_name"  value="<?php echo $row['p_name']; ?>" required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Available</label>
			<input type="text" readonly name="ava" value="<?php echo $row['p_available']; ?>" required class="form-control">		
		</div>
		<div class="form-group">
			<label for="">Quantity</label>
			<input type="text" name="quantity" required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Price</label>
			<input type="text"  name="price" value="<?php echo $row['p_selling_cost']; ?>" required class="form-control">			
		</div>
		<div class="form-group">
			<label for="">Total Price</label>
			<input type="text" name="t_price"  required class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Date</label>
			<input type="date" name="date" required class="form-control">				
		</div>
		<div>
			<button class="btn btn-primary mr-2" name="submit" value="submit">Submit</button>
			<button class="btn btn-danger mr-2" name="close" value="submit">Close</button>							
		</div>			
	</form>
</div>
<?php include'dashbord_footer.php' ?>