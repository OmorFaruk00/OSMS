<?php include'header.php' ?>
<?php 
include "dbconection.php";

if(isset($_POST['signin'])){
  
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn,md5($_POST['password']));

  $sql = "SELECT * FROM `user_ragistration` WHERE email =  '$email'";
  $result = mysqli_query($conn,$sql) or die("Query Failed");

 if(mysqli_num_rows($result) > 0 ){
 
    $error_message = "<div class='alert alert-danger mt-2 text-center' >This Email already exist Try anothoer on...</div>";
  }else{
    $sql1 = "INSERT INTO `user_ragistration`(`name`, `email`, `password`) VALUES ('{$name}','{$email}','{$password}')";
    if(mysqli_query($conn,$sql1)){
      $error_message = "<div class='alert alert-success mt-2 text-center' >Acount Created Successfuly..</div>";
        // header ("Location:http://localhost/OSMS/index.php");
      }
  }
}




 ?>
<section id="signin" class="bg-light py-5">
   <div class="container ">
     <h2 class="text-center mt-5">Create an Account</h2>
     <div class="row mt-5">
      <div class="col-md-6 offset-md-3">
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="shadow-lg p-5 bg-white">
          <div class="form-group">
            <i class="fas fa-user"></i><label for="" class="font-weight-bold pl-2">Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" required name="name">           
          </div>
          <div class="form-group">
            <i class="fas fa-user"></i><label for="" class="font-weight-bold pl-2">Email</label>
            <input type="text" class="form-control" placeholder="Enter Email" required name="email">           
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="" class="font-weight-bold pl-2">Password</label>
            <input type="password" class="form-control" placeholder="Enter Password" required name="password">           
          </div>

          <button class="btn btn-danger btn-block font-weight-bold shadow-sm mt-5" name="signin">Sign Up</button> 


            <?php if(isset($error_message)){ echo $error_message; } ?>
        </form>
      </div>      
    </div>
  </div>
</section>
<!-- footer section -->
 






<?php include'footer.php' ?> 
