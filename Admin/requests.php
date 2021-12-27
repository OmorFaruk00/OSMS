<?php 
define('TITLE', 'Requests');
define('PAGE', 'Requests');
include "dashbord_header.php";
include 'dbconnect.php';
if(!isset($_SESSION['is_login'])){header("Location:http://localhost/OSMS/");}
// Requests Close
	if(isset($_REQUEST['close'])){
	$get_id = $_REQUEST['id'];
	$sql = "DELETE FROM `submit_requester` WHERE request_id = {$get_id }";
	$result = $conn->query($sql);
 }// Requests Close
?>
<div class=" col-sm-4 mt-3 mx-4">
	<?php 
	$sql = "SELECT * FROM `submit_requester`";
	$result = $conn->query($sql);
	if($result->num_rows > 0 ){
		while($row = $result->fetch_assoc()){
			?>
			<div class="card mb-5">
				<div class="card-header">Request ID : <?php echo $row['request_id']; ?></div>
				<div class="card-body">
					<h4 class="card-title">Request Info : <?php echo $row['request-info']; ?> </h4>						
					<p class="card-text">Request Desc : <?php echo $row['request-desc']; ?></p>
					<p class="card-text">Request Date : <?php echo $row['request-date']; ?></p>
					<div class="float-right">
						<form action="" method="POST">
							<input type="hidden" name="id" value=<?php echo $row['request_id']; ?>>
							<input  type="submit" name ="view" class="btn btn-primary mt-3 mr-2" value="View" >
							<input type="submit" name ="close" class="btn btn-danger mt-3 " value="Close" >
						</form>
					</div>
				</div>

			</div>
		<?php } 
	} ?>
</div>
<!--  request form view-->
<?php include 'requests_form.php';?>
<!--  request form view-->
<?php include'dashbord_footer.php' ?>