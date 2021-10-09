<?php 
define('TITLE', 'Dashbord');
define('PAGE', 'Dashborad');
include'dashbord_header.php';
include 'dbconnect.php';
if(!isset($_SESSION['admin_login'])){
	 header("Location:http://localhost/OSMS/Admin/");
}
?>
<div class="col-sm-9 col-md-10">
	<div class="row text-center mx-5">
		<div class="col-md-12">
			<?php
			if (isset($_GET['alert_message'])) {
				echo $_GET['alert_message'];
			}?>
		</div>
		<div class=" col-sm-4 mt-5">
			<div class="card text-white bg-danger" style="max-width: 18rem;">
				<div class="card-header"> Requests Received</div>
				
					<div class="card-body">
						<h4 class="card-title">20</h4>						
						<a href="#" class="btn text-white">View</a>
				   </div>				
			</div>
		</div>
		<div class=" col-sm-4 mt-5">
			<div class="card text-white bg-info" style="max-width: 18rem;">
				<div class="card-header"> Assigned Works</div>
					<div class="card-body">
						<h4 class="card-title">40</h4>						
						<a href="#" class="btn text-white">View</a>
				   </div>
			</div>
		</div>
		<div class=" col-sm-4 mt-5">
			<div class="card text-white bg-primary" style="max-width: 18rem;">
				<div class="card-header"> No of Technician</div>
					<div class="card-body">
						<h4 class="card-title">10</h4>						
						<a href="#" class="btn text-white">View</a>
				  </div>
			</div>
		</div>	
     </div>

	<!-- Show Requester Area -->	
<div class=" text-center mt-5 mx-5">
  <p class=" bg-dark text-white p-2">List of Requester</p>              
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Requester ID</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <?php
	$sql = "SELECT * FROM `user_ragistration`";
	$result = $conn->query($sql);
	 if($result->num_rows > 0 ){
	 	while($row = $result->fetch_assoc()){
	 ?>
    <tbody>
      <tr >
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
      </tr>      
    </tbody>
    <?php
   } 
}
 ?>
  </table>
</div>



	<!-- Show Requester Area -->
</div>
<?php include'dashbord_footer.php'?>