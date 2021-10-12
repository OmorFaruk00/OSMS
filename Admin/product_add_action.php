<?php 
include 'dbconnect.php';
if(isset($_POST['add'])){
	$name = $_POST['name'];
	$dop = $_POST['dop'];
	$ava = $_POST['ava'];
	$total = $_POST['total'];
	$original = $_POST['original'];
	$sell= $_POST['sell'];	
		$sql = "INSERT INTO `asset`(`p_name`, `p_dop`, `p_available`, `p_total`, `p_original_cost`, `p_selling_cost`) VALUES ('$name','$dop','$ava','$total','$original','$sell')";
		if($conn->query($sql) == TRUE){
			$alert_message = "<div class='alert alert-success text-center'>Add Successfully...</div>";
			?>
			<script>window.location.href ="product_add.php?alert_message='<?php echo $alert_message;?>'"</script>
			<?php
		}	
	}
	if(isset($_POST['close'])){echo"<script>location.href='assets.php'</script>";}
 ?>