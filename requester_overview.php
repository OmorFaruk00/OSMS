<?php
define('TITLE', 'Requests Overview');
define('PAGE', 'RquestsOverview');
include "user_header.php";
include "Database.php";

$sql = "SELECT * FROM `submit_requester`";
$result = $conn->query($sql);
if($result->num_rows > 0){
	?>
	<div class="col-sm-9 ml-5 mt-4">
		<table class="table mt-3">
			<p class="bg-dark text-white p-2 text-center">Request Details</p>
			<thead>
				<tr>
					<th>Req.ID</th>
					<th>Req. Name</th>
					<th>Req. Info</th>
					<th>Req. Desc</th>
					<th>Req. Email</th>
					<th>Req. Mobile</th>
					<th>Req. Date</th>
					<th>Action</th>
					
				</tr>
			</thead>
			<?php while($row = $result->fetch_assoc()) {?>
				<tbody>
					<td><?php echo $row['request_id'];?></td>
					<td><?php echo $row['request-name'];?></td>
					<td><?php echo $row['request-info'];?></td>
					<td><?php echo $row['request-desc'];?></td>
					<td><?php echo $row['request-email'];?></td>
					<td><?php echo $row['request-mobile'];?></td>
					<td><?php echo $row['request-date'];?></td>
					<td><button class="btn btn-danger" id="deletebtn"  data-id ="<?php echo $row['request_id']; ?>" >Delete</button></td>
								
				</tbody> 
			<?php }?>
		</table>
	<?php }?>
</div>

<?php include "user_footer.php"; ?>