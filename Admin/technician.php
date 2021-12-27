<?php 
define('TITLE', 'Technician');
define('PAGE', 'Technician');
include "dashbord_header.php";
include "database.php";
if(!isset($_SESSION['is_login'])){header("Location:http://localhost/OSMS/");}	
$db = new Database;
$limit = 5;
$db->select('technician',"*",null,null,null,$limit);
$result = $db->getResult();?>
<div class="col-sm-10 col-md-9">
	<div class="ml-5 ">
		<a href="technician_add.php" class="btn btn-success float-right "><i class="fas fa-plus fa-2x"></i></a>
		<p class="bg-dark text-white py-2 text-center mt-3 offset-1" style="width: 800px;">List of Technician</p>
	</div>
	<table class="table table-striped mx-5 text-center">
		<thead>
			<tr>
				<th>Tech. ID</th>
				<th>Tech. Name</th>
				<th>Tech. City</th>
				<th>Tech. Mobile</th>
				<th>Tech. Email</th>
				<th>Action</th>	
			</tr>		
		</thead>	
		<?php  foreach ($result as $row) { ?>	
			<tbody>
				<tr>
					<td><?php echo $row['tech_id']; ?></td>
					<td><?php echo $row['tech_name']; ?></td>
					<td><?php echo $row['tech_city']; ?></td>
					<td><?php echo $row['tech_mobile']; ?></td>
					<td><?php echo $row['tech_email']; ?></td>
					<td>
						<a href="technician_update.php?id=<?php echo $row['tech_id']; ?>" class="btn btn-info"><i class="fas fa-pen"></i></a>
						<a href="technician_delete_action.php?did=<?php echo $row['tech_id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>						
					</td>
				</tr>			
			</tbody>
		<?php } ?>
	</table>
	<?php $db->pagination('technician',null,null,$limit); ?>
</div>
<?php include'dashbord_footer.php' ?>