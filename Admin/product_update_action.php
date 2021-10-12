<?php 
include 'dbconnect.php';
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$dop= $_POST['dop'];
	$ava = $_POST['ava'];
	$total = $_POST['total'];
	$original = $_POST['original'];
	$sell= $_POST['sell'];

	$sql = "UPDATE `asset` SET `p_name`='$name',`p_dop`='$dop',`p_available`='$ava',`p_total`='$total',`p_original_cost`='$original',`p_selling_cost`='$sell' WHERE p_id = '$id'";  

	if($result = $conn->query($sql)){
		$alert_message = "<div class='alert alert-danger text-center'>Update Successfull</div>";?>		
		 <script>window.location.href ="product_update.php?alert_message='<?php echo $alert_message;?>'"</script>
		<?php  	

	}else{		
			$alert_message = "<div class='alert alert-success text-center'>Not Updated</div>";?>			
			<script>window.location.href ="product_update.php?alert_message='<?php echo $alert_message;?>'"</script>
			<?php
		}
}
// close button
if(isset($_POST['close'])){echo"<script>location.href='assets.php'</script>";}

 ?>

