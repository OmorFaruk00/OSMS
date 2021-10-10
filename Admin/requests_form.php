	
<?php 
if(!isset($_SESSION['admin_login'])){
	header("Location:http://localhost/OSMS/Admin/");}
	if(isset($_REQUEST['view'])){
		$get_id = $_REQUEST['id'];
		$sql = "SELECT * FROM `submit_requester` WHERE request_id = {$get_id }";
		$result = $conn->query($sql);
		$result->num_rows;
		$row = $result->fetch_assoc(); } ?>
		<div class=" col-sm-5 mt-3 ">
			<form action="requests_form_action.php" method="POST" class="jumbotron">
				<?php if(isset($_GET['alert_message'])){
					echo $_GET['alert_message'];
					$_GET['alert_message'] = NULL; ?>
					<script>
						setTimeout(function(){
							window.location.href ="http://localhost/OSMS/Admin/requests.php";
						}, 2000);
					</script>
					<?php } ?>
				<h4 class="text-center mb-4 font-weight-bold">Assign Work Order Request</h4>	
				<div class="form-group">
					<label for="">Request ID</label>
					<input type="text" class="form-control" placeholder="Request ID" name="id" required value="<?php echo $row['request_id']; ?>" >	
				</div>
				<div class="form-group">
					<label for="">Request Info</label>
					<input type="text" class="form-control" placeholder="Request Info" required name="request" value = "<?php echo $row['request-info']; ?>">	
				</div>
				<div class="form-group">
					<label for="">Description</label>
					<input type="text" class="form-control" placeholder="Write Description"  required name="desc" value = "<?php echo $row['request-desc']; ?>">	
				</div>
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" placeholder="Write Name" required name="name" value ="<?php echo $row['request-name']; ?>">	
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="">Address Line 1</label>
						<input type="text" class="form-control" placeholder="House No"  required name="address1" value ="<?php echo $row['request-add1']; ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="">Address Line 1</label>
						<input type="text" class="form-control" placeholder="Colony Name" required name="address2" value ="<?php echo $row['request-add2']; ?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="">City</label>
						<input type="text" class="form-control" placeholder="City" required name="city" value ="<?php echo $row['request-city']; ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="">State</label>
						<input type="text" class="form-control" placeholder="state" required name="state" value ="<?php echo $row['request-state']; ?>"  >
					</div>
					<div class="form-group col-md-2">
						<label for="">Zip</label>
						<input type="text" class="form-control" placeholder="Zip" required name="zip" value ="<?php echo $row['request-zip'];?>" >
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="">Email</label>
						<input type="email" class="form-control" placeholder="Email" required name="email" value = "<?php echo $row['request-email']; ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="">Mobile</label>
						<input type="text" class="form-control" placeholder="Mobile" required name="mobile" value = "<?php echo $row['request-mobile']; ?>">
					</div>				
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="">Assign Technician</label>
						<input type="text" class="form-control" placeholder="Technician Name" required name="asstech">
					</div>
					<div class="form-group col-md-6">
						<label for="">Date</label>
						<input type="date" class="form-control" required name="date">
					</div>				
				</div>							
				<button class="btn btn-danger mr-3 mt-2" name="assign">Assign</button>
				
				<button class="btn btn-primary mt-2" name="close">Close</button>
			</form>
		</div>
		<!--  request form view-->
