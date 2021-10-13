<?php 
define('TITLE', 'Product Details');
define('PAGE', 'ProductDetails');
include "user_header.php";
include "database.php";
$sql = "SELECT * FROM `asset`";
$result = $conn->query($sql);
if($result->num_rows > 0){
	?>
	<div class="col-sm-9 ml-5 mt-4">
		<table class="table mt-3">
			<p class="bg-dark text-white p-2 text-center">Product Details</p>
			<thead>
				<tr>
					<th>Product ID</th>
					<th>Product Name</th>
					<th>Availabe</th>
					<th>Total</th>
					<th>Price</th>
				</tr>
			</thead>
			<?php while($row = $result->fetch_assoc()) {?>
				<tbody>
					<td><?php echo $row['p_id'];?></td>
					<td><?php echo $row['p_name'];?></td>
					<td><?php echo $row['p_available'];?></td>
					<td><?php echo $row['p_total'];?></td>
					<td><?php echo $row['p_selling_cost'];?></td> 			
				</tbody> 
			<?php }?>
		</table>
	<?php }?>
</div>