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
    $alert_message = "<div class='alert alert-danger text-center'>This Email already exist Try anothoer on</div>"; ?>   
    <script>window.location.href ="signin.php?alert_message='<?php echo $alert_message;?>'"</script>
    <?php 
  }else{
    $sql1 = "INSERT INTO `user_ragistration`(`name`, `email`, `password`) VALUES ('{$name}','{$email}','{$password}')";
    if(mysqli_query($conn,$sql1)){
      $alert_message = "<div class='alert alert-danger text-center'>Account Created Successfully</div>"; ?>    
      <script>window.location.href ="signin.php?alert_message='<?php echo $alert_message;?>'"</script>
      <?php   
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

       
        <?php if(isset($_GET['alert_message'])){echo $_GET['alert_message'];          
          $_GET['alert_message'] = NULL; ?>
          <script>
            setTimeout(function(){
              window.location.href ="signin.php";
            }, 2000);
            </script><?php } ?>
          </form>
        </div>      
      </div>
    </div>
  </section>
  <!-- footer section -->







  <?php include'footer.php' ?> 
