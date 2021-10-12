<?php 
define('TITLE', 'Requester');
define('PAGE', 'Requester');
include "dashbord_header.php";
include "database.php";
if(!isset($_SESSION['admin_login'])){echo"<script>location.href='index.php'</script>";}

$db = new Database;
$limit = 7;
$db->select('user_ragistration',"*",null,null,null,$limit);
$result = $db->getResult();?>
<div class="col-sm-10 col-md-9">	
	<table class="table table-striped mx-5 text-center">
		<p class="bg-dark text-white  text-center ml-5 py-2" >List of Requester</p>	
		<thead>
			<tr>
				<th>Requester ID</th>
				<th>Requester Name</th>
				<th>Requester Email</th>
				<th>Action</th>	
			</tr>		
		</thead>	
		<?php  foreach ($result as $row) { ?>	
			<tbody>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td>						
						<a href="requester_delete.php?did=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>														
					</td>
				</tr>			
			</tbody>
		<?php } ?>
	</table>
	<?php $db->pagination('user_ragistration',null,null,$limit); ?>
</div>

<?php include'dashbord_footer.php'?>





 

