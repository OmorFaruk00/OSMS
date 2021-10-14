<?php 
define('TITLE', 'Login page');
include("header.php"); 
include ("dbconection.php");
session_start();
if(!isset($_SESSION['is_login'])){
  if(isset($_POST['login'])){                       
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM `user_ragistration` WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0 ){
     while($row = mysqli_fetch_assoc($result)){
      $_SESSION['is_login'] = true;
      $_SESSION['name'] = $row['name'];
      $_SESSION['email'] = $row['email'];
      $db_pass = $row['password'];

      $pass_decode = password_verify( $password, $db_pass);
      if($pass_decode){
        header("Location:http://localhost/OSMS/user_profile.php");
            }
      else{
        $error_message = "<div class='alert alert-danger mt-2'> Enter Valid Email and Password</div>";
          }
    }

  }        
}

}else{
  header("Location:http://localhost/OSMS/user_profile.php");
}       

?>

<section id="signin" class="bg-light py-5">
	
 <div class="container mb-5">
  <div class="pt-5 text-center">
   <i class="fas fa-stethoscope fa-2x pr-2 text-danger"></i>
   <span class=" mt-5 font-weight-bold" style="font-size: 30px;">Online Service Management System</span>
 </div>
 <div class="text-center">
   <i class="fas fa-user-secret fa-1x pr-2 text-danger"></i><span style="font-size: 20px;">Requester Area (Demo)<span>
   </div>

   <div class="row mt-5 offset-4">
    <div class="col-md-6 ">
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="shadow-lg p-5 bg-white">

        <div class="form-group">
          <i class="fas fa-user"></i><label class="font-weight-bold pl-2">Email</label>
          <input type="text" class="form-control" placeholder="Enter Email" required name="email">           
        </div>
        <div class="form-group">
          <i class="fas fa-key"></i><label for="" class="font-weight-bold pl-2">Password</label>
          <input type="password" class="form-control" placeholder="Enter Password" required name="password">           
        </div>
        <button class="btn btn-danger btn-block font-weight-bold shadow-sm mt-5"  name="login">Log In</button> 
        <?php if(isset($error_message)){ echo $error_message; } ?>        
      </form>
    </div>      
  </div>
</div>
</section>
<?php include("footer.php") ?>