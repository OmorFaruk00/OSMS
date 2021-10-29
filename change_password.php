<?php
define('TITLE', 'Change Password');
define('PAGE', 'ChangePassword');
include "user_header.php";
include "Database.php";
?>
<div class="col-sm-4 col-md-4 mt-3 ml-5 ">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST"> 
		<div class="form-group">			
			<label for="">Old Password</label>
			<input type="password" class="form-control" id="oldpass" >
			<div class="form-group">
				<label for="">New Password</label>
				<input type="password" class="form-control" id="newpass" >	
			</div>
			<div class="form-group">
				<label for="">Confirm Password</label>
				<input type="password" class="form-control" id="conpass" >	
			</div>           
			<button class="btn btn-warning mt-2 mr-2" name="update" id="changeUser_password">Update</button>			
		</div>
		<div id="change_alert" style="width: 80%; height: 10px;"></div>
	</form>
</div>
<?php include "user_footer.php"; ?>
