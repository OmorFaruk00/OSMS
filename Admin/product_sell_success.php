<?php 
define('TITLE', 'Product Sell Success');
define('PAGE', 'Assets');
include "dashbord_header.php";
include 'dbconnect.php';
if(!isset($_SESSION['admin_login'])){echo"<script>location.href='index.php'</script>";}
$id = $_SESSION['id'];
$sql = "SELECT * FROM `customer_selling` WHERE cust_id ='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<div class="col-sm-3 offset-2 mt-5">
	<table class="table">
		<tbody>
			<h3 class="text-center">Customer Bill</h3>
			<tr>
				<th>Customer ID</th>
				<th><?php echo $row['cust_id']; ?></th>
			</tr>
			<tr>
				<th>Customer name</th>
				<th><?php echo $row['cust_name']; ?></th>
			</tr>
			<tr>
				<th>Customer Address</th>
				<th><?php echo $row['cust_add']; ?></th>
			</tr>
			<tr>
				<th>Product Name</th>
				<th><?php echo $row['p_name']; ?></th>
			</tr>
			<tr>
				<th>Quentity</th>
				<th><?php echo $row['p_quantity']; ?></th>
			</tr>
			<tr>
				<th>Price</th>
				<th><?php echo $row['p_price']; ?></th>
			</tr>
			<tr>
				<th>Total Price</th>
				<th><?php echo $row['p_name']; ?></th>
			</tr>
			<tr>
				<th>Date</th>
				<th><?php echo $row['s_date']; ?></th>
			</tr>
			<tr>
				<td>
					<form action="" class="d-print-none mt-4">
						<input type="submit" value="Print" class="btn btn-danger mr-2" onClick="window.print()">
						<a href="assets.php" class="btn btn-info d-print-none">Close</a>
					</form>			
				</td>			
			</tr>
		</tbody>
		
	</table>

</div>
