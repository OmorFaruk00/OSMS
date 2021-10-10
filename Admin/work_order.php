<?php 
define('TITLE', 'work Order');
define('PAGE', 'Workrder');
include "dashbord_header.php";
include 'dbconnect.php';
if(!isset($_SESSION['admin_login'])){
	header("Location:http://localhost/OSMS/Admin/");}
	$sql = "SELECT * FROM `assign_work`";
	$result = $conn->query($sql);
	if($result->num_rows > 0) { ?>
		<div class="col-sm-9 col-md-10">
			<table class="table mt-4 mx-3">
				<thead>
					<tr>
						<th>Req ID</th>
						<th>Req Info</th>
						<th>Name</th>
						<th>Address</th>
						<th>Mobile</th>
						<th>Technician</th>
						<th>Assign Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php 
				while($row = $result->fetch_assoc()){ ?>        
					<tbody>
						<tr>
							<td><?php echo $row['request_id'] ?></td>
							<td><?php echo $row['request-info'] ?></td>
							<td><?php echo $row['request-name'] ?></td>
							<td><?php echo $row['request-add1']. " ".$row['request-add2'] ?></td>        
							<td><?php echo $row['request-mobile'] ?></td>
							<td><?php echo $row['ass_tech'] ?></td>
							<td><?php echo $row['ass_date'] ?></td>
							<td>
								<a href="work.php?id=<?php echo $row['request_id']?>" class="btn btn-warning mr-2"><i class="far fa-eye"></i>
									<a href="work_order_delete.php?id=<?php echo $row['request_id']?>" class="btn btn-secondary"><i class="far fa-trash-alt"></i></a>
								</td>        
							</tr>  
						</tbody>
					<?php }?>
				</table>
			</div>
		<?php }else{
			echo "<h4 class='text-danger mt-5 ml-5'>No Record Found</h4>";
		}?>
		<?php include'dashbord_footer.php' ?>