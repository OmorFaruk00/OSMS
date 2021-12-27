<?php 
define('TITLE', 'Sells Report');
define('PAGE', 'Sellreport');
include "dashbord_header.php";
include 'dbconnect.php';
if(!isset($_SESSION['is_login'])){
	header("Location:http://localhost/OSMS/");}
	?>
	<div class="col-sm-9 col-md-10">
		<form action="" method="post" class="d-print-none mt-5 offset-3">
			<div class="row">
				<div class="col-md-3 form-group">
					<input type="date" name="start_date" class="form-control">
				</div>
				<div><span>To</span></div>
				<div class="col-md-3 form-group">
					<input type="date" name="end_date" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary ml-3" name="search" value="Search">
				</div>
			</div>
		</form>
		<?php 
		if(isset($_POST['search'])){
			$start = $_POST['start_date'];
			$end = $_POST['end_date'];
			$sql = "SELECT * FROM customer_selling WHERE s_date BETWEEN '$start 'AND '$end'";
			$result = $conn->query($sql);
			if($result->num_rows > 0){ ?>
				<table class="table mx-3">
					<h3 class="text-center">Sells Report</h3>
					<thead>
						<tr>
							<th>Customer ID</th>
							<th>Customer Name</th>
							<th>Customer Address</th>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Total Price</th>
							<th>Date</th>
						</tr>
					</thead>
					<?php while($row = $result->fetch_assoc()) {?>
						<tbody>
							<tr>
								<td><?php echo $row['cust_id'];?></td>
								<td><?php echo $row['cust_name'];?></td>
								<td><?php echo $row['cust_add'];?></td>
								<td><?php echo $row['p_name'];?></td>
								<td><?php echo $row['p_quantity'];?></td>
								<td><?php echo $row['p_price'];?></td>
								<td><?php echo $row['t_price'];?></td>
								<td><?php echo $row['s_date'];?></td>	 			
							</tr>
						</tbody>
					<?php } ?>
				</table>
				<div class="col-sm-3 offset-4">
					<form action="" class="d-print-none  my-5 ">
						<button type="print" class="btn btn-primary mr-3 " value="Print" onClick='window.print()'>Print</button>
						<a href="sell_report.php"> <button class="btn btn-danger">Close</button></a>
					</form>
				</div>
			<?php }else{
				echo "<h3 class='text-danger text-center mt-5'>No Record</h3>";
			}
		} ?>
	</div>

	<?php include'dashbord_footer.php' ?>