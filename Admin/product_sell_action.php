<?php 
include 'dbconnect.php';
if(isset($_POST['submit'])){
	$p_id = $_POST['id'];
	$p_ava =  $_POST['ava'] - $_POST['quantity'];


	$c_name = $_POST['c_name'];
	$c_address = $_POST['c_address'];
	$p_name = $_POST['p_name'];
	$quantity = $_POST['quantity'];
	$price = $_POST['price'];
	$total = $_POST['t_price'];
	$date = $_POST['date'];

	$sql = "INSERT INTO `customer_selling`(`cust_name`, `cust_add`, `p_name`, `p_quantity`, `p_price`, `t_price`, `date`) VALUES ('$c_name', '$c_address', '$p_name', '$quantity', '$price', '$total', '$date')";
	
	if($conn->query($sql) == TRUE){
		$last_id = mysqli_insert_id($conn);
		session_start();
		$_SESSION['id'] = $last_id;		
		echo"<script>location.href='product_sell_success.php'</script>";
	}

	$sqlup = "UPDATE asset SET p_available = $p_ava  WHERE p_id = '$p_id'";
	$conn->query($sqlup);
	
}

?>