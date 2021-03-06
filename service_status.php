<?php
define('TITLE', 'Status ');
define('PAGE', 'ServiceStatus');
include "user_header.php";
include 'database.php.';
?>
<div class="col-sm-6 mt-5 mx-5">
	<form action="" method="post" class="form-inline d-print-none">
		<div class="form-group ">
			<label for="">Enter Request ID : </label>
			<input type="text" name="checkid" class="form-control mx-2" required value= >
		</div>
		<button class="btn btn-danger">Search</button>
	</form>
	<?php if(isset($_GET['alert_message'])){echo $_GET['alert_message'];	
	echo'<script>setTimeout(function(){window.location.href ="http://localhost/OSMS/service_status.php"; }, 2000);</script>'; } 
	if(isset($_REQUEST['checkid'])){
		$sql = "SELECT * FROM `assign_work` WHERE request_id = '{$_REQUEST['checkid']}'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if($row['request-email'] == $_SESSION['email']){ 
			?>
			<h4 class="text-center mt-5">Assign Works Details</h4>
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
				<form action="" class="mt-3 d-print-none">
					<input type="submit" class="btn btn-danger mr-2" value="print" onClick="window.print()">
					<input type="submit" class="btn btn-secondary" value="close" name="close"> 	 		
				</form> 	 	
			</div>
			<?php 
		} else{
			$sql1 = "SELECT * FROM `submit_requester` WHERE request_id = '{$_REQUEST['checkid']}'";
			$result1 = $conn->query($sql1);
			$row1 = $result1->fetch_assoc();
			if($row1['request_id'] == $_REQUEST['checkid']){ 

				$alert_message = "<div class='alert alert-success text-center col-sm-6'>Your Request Is Still Pending...</div>";
				?>
				<script>window.location.href ="http://localhost/OSMS/service_status.php?alert_message='<?php echo $alert_message;?>'"</script><?php		
			}
			else{
				if($row1['request_id'] !== $_REQUEST['checkid']){
					$alert_message = "<div class='alert alert-success text-center col-sm-8'>Your Request Id Is Wrong? Please Enter Your Correct Id..</div>";
					?>
					<script>window.location.href ="http://localhost/OSMS/service_status.php?alert_message='<?php echo $alert_message;?>'"</script><?php	
				}
			}
		} 
	} ?>
</div>
<?php include "user_footer.php"; ?>
