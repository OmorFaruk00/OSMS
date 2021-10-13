<?php 
define('TITLE', 'Workreport');
define('PAGE', 'Workreport');
include "dashbord_header.php";
include 'dbconnect.php';
if(!isset($_SESSION['admin_login'])){echo"<script>location.href='index.php'</script>";}

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

		$sql = "SELECT * FROM assign_work WHERE ass_date BETWEEN '$start 'AND '$end'";
		$result = $conn->query($sql);

		if($result->num_rows > 0){ ?>

			<table class="table mx-3">
				<p class="text-center bg-dark text-white p-2 mt-3 mx-3 ">Works Report</>
				<thead>
					<tr>
						<th>Req ID</th>
						<th>Request Info</th>
						<th>Name</th>
						<th>Address</th>
						<th>City</th>
						<th>Mobile/th>
						<th>technician</th>
						<th>Assign Date</th>
					</tr>
				</thead>
				<?php while($row = $result->fetch_assoc()) {?>
					<tbody>
						<tr>
							<td><?php echo $row['request_id'];?></td>
							<td><?php echo $row['request-info'];?></td>
							<td><?php echo $row['request-name'];?></td>
							<td><?php echo $row['request-add1']. ' '.$row['request-add2'];?></td>
							<td><?php echo $row['request-city'];?></td>
							<td><?php echo $row['request-mobile'];?></td>
							<td><?php echo $row['ass_tech'];?></td>
							<td><?php echo $row['ass_date'];?></td>
								 			
						</tr>
					</tbody>
				<?php } ?>
				
			</table>
			<div class="col-sm-3 offset-4">
				<form action="" class="d-print-none  my-5 ">
					<button type="print" class="btn btn-primary mr-3 " value="Print" onClick='window.print()'>Print</button>
					<a href="work_report.php"> <button class="btn btn-danger">Close</button></a>
				</form>
			</div>
		<?php }else{
			echo "<h3 class='text-danger text-center mt-5'>No Record</h3>";
		}
	} ?>
</div>


<?php include'dashbord_footer.php' ?>