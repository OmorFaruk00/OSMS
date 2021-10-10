<?php 
define('TITLE', 'work Order');
include "dashbord_header.php";
include 'dbconnect.php';
if(!isset($_SESSION['admin_login'])){
	header("Location:http://localhost/OSMS/Admin/");}?>
	<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM `assign_work` WHERE request_id = '$id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc(); ?>

	<div class="col-md-6 col-sm-6 mx-5">
		<h4 class="text-center mt-5 mb-3">Assign Works Details</h4>
		<table class="table table-bordered">
			<tbody>
				<tr>
					<td>Request ID</td>
					<td><?php echo $row['request_id']; ?></td>
				</tr>
				<tr>
					<td>Request Info</td>
					<td><?php echo $row['request-info']; ?></td>
				</tr>
				<tr>
					<td>Request Description</td>
					<td><?php echo $row['request-desc']; ?></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><?php echo $row['request-name']; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $row['request-add1']. " " . $row['request-add2']; ?></td>
				</tr>
				<tr>
					<td>City</td>
					<td><?php echo $row['request-city']; ?></td>
				</tr>
				<tr>
					<td>State</td>
					<td><?php echo $row['request-state']; ?></td>
				</tr>
				<tr>
					<td>Zip Code</td>
					<td><?php echo $row['request-zip']; ?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?php echo $row['request-email']; ?></td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td><?php echo $row['request-mobile']; ?></td>
				</tr>
				<tr>
					<td>Assign Date</td>
					<td><?php echo $row['ass_date']; ?></td>
				</tr>
				<tr>
					<td>Technician Name</td>
					<td><?php echo $row['ass_tech']; ?></td>
				</tr>
				<tr>
					<td>Customer Sign</td>
					<td></td>
				</tr>
				<tr>
					<td>Technician Sign</td>
					<td></td>
				</tr>
			</tbody> 	 	
		</table>
		<div class="text-center mb-5">			
			<form action="" class="mt-3 d-print-none" method="POST">
				<input type="submit" class="btn btn-danger mr-2" value="print" onClick="window.print()">
				<?php if(isset($_POST["close"])){?>
					<script>window.location="http://localhost/OSMS/Admin/work_order.php";</script>		
				<?php } ?>
				<input type="submit" class="btn btn-secondary" value="close" name="close"> 	 		
			</form> 	 	
		</div>
		<?php include'dashbord_footer.php' ?>