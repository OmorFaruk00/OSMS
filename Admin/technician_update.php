<?php 
define('TITLE', 'Technician');
define('PAGE', 'Technician');
include "dashbord_header.php";
include 'dbconnect.php';
if(!isset($_SESSION['admin_login'])){echo"<script>location.href='index.php'</script>";}
$tech_id = '';
$tech_name = '';
$tech_city = '';
$tech_mobile = '';
$tech_email = '';

if(isset($_GET['id'])){
	$tech_id = $_GET['id'];
	$sql = "SELECT * FROM `technician` WHERE tech_id = '{$tech_id}'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$tech_id = $row['tech_id'];
	$tech_name = $row['tech_name'];
	$tech_city = $row['tech_city'];
	$tech_mobile = $row['tech_mobile'];
	$tech_email = $row['tech_email'];
}
?>
<div class="col-sm-6">

	<form action="technician_update_action.php" method="POST" class="jumbotron offset-4 mt-5">
		<?php if(isset($_GET['alert_message'])){echo $_GET['alert_message'];	
		echo'<script>setTimeout(function(){window.location.href ="technician.php";}, 2000);</script>';} ?>
		<h2 class="text-center ">Update Technician</h2>

		<input type="hidden" name="id" required value="<?php echo $tech_id;?>" class="form-control">
		<div class="form-group">
			<label for="">Name</label>
			<input type="text" name="name" required value="<?php echo $tech_name;?>" class="form-control" >				
		</div>

		<div class="form-group">
			<label for="">City</label>
			<input type="text" name="city" required value="<?php echo $tech_city;?>" class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Mobile</label>
			<input type="text" name="mobile" required value="<?php echo $tech_mobile;?>" class="form-control">				
		</div>
		<div class="form-group">
			<label for="">Email</label>
			<input type="text" name="email" required value="<?php echo $tech_email;?>" class="form-control">				
		</div>
		<div>
			<button class="btn btn-primary mr-2" name="update" value="submit">Update</button>			
			<button class="btn btn-danger" name="close" value="submit">Close</button>			
		</div>
	</form>
</div>
