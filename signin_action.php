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
    <script>window.location.href ="singin.php?alert_message='<?php echo $alert_message;?>'"</script>
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