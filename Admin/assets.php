<?php 
define('TITLE', 'Assets');
define('PAGE', 'Assets');
include "dashbord_header.php";
if(!isset($_SESSION['admin_login'])){echo"<script>location.href='index.php'</script>";}
include "database.php";
$db = new Database;
$limit = 5;
$db->select('asset',"*",null,null,null,$limit);
$result = $db->getResult();?>
<div class="col-sm-10 col-md-9">
	<div class="ml-5 ">
		<a href="product_add.php" class="btn btn-success float-right"><i class="fas fa-plus fa-2x"></i></a>
		<p class="bg-dark text-white py-2 text-center mt-3 offset-1" style="width: 800px;">Products/Parts detailes</p>
	</div>
	<table class="table table-striped mx-5 text-center">
		<thead>
			<tr>
				<th>Product ID</th>
				<th>Name</th>
				<th>DOP</th>
				<th>Available</th>
				<th>Total</th>
				<th>Original Cost</th>
				<th>Selling Cost</th>
				<th>Action</th>	
			</tr>		
		</thead>	
		<?php  foreach ($result as $row) { ?>	
			<tbody>
				<tr>
					<td><?php echo $row['p_id']; ?></td>
					<td><?php echo $row['p_name']; ?></td>
					<td><?php echo $row['p_dop']; ?></td>
					<td><?php echo $row['p_available']; ?></td>
					<td><?php echo $row['p_total']; ?></td>
					<td><?php echo $row['p_original_cost']; ?></td>
					<td><?php echo $row['p_selling_cost']; ?></td>
					
					<td>
						<form action="product_update.php" method="POST" class="d-inline">
							<input type="hidden" name="id" value="<?php echo $row['p_id']; ?>">
							<button class=" btn btn-info mr-2" type="submit" name="edit" value="edit"><i class="fas fa-pen"></i></button>
						</form>
						<form action="product_sell.php" method="POST" class="d-inline">
							<input type="hidden" name="id" value="<?php echo $row['p_id']; ?>">
							<button class=" btn btn-warning mr-2" type="submit" name="sell" value="edit"><i class="fas fa-handshake"></i></button>
						</form>
						<form action="product_delete.php" method="POST" class="d-inline">
							<input type="hidden" name="id" value="<?php echo $row['p_id']; ?>">
							<button class=" btn btn-danger mr-2" type="submit" name="delete" value="delete"><i class="fas fa-trash-alt"></i></button>
						</form> 			

					</td>
				</tr>			
			</tbody>
		<?php } ?>
	</table>
	<?php $db->pagination('asset',null,null,$limit); ?>
</div>
<?php include'dashbord_footer.php' ?>