<?php 
include "dbconnection.php";
session_start();

if(isset($_POST['signup'])){
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $role = mysqli_real_escape_string($conn, $_POST['role']);
  $pass = password_hash($password, PASSWORD_BCRYPT);
  $sql = "SELECT * FROM `user_ragistration` WHERE email =  '$email'";
  $result = mysqli_query($conn,$sql) or die("Query Failed");
  if(mysqli_num_rows($result) > 0 ){
    echo"error";
    
  }else{
    $sql1 = "INSERT INTO `user_ragistration`(`name`, `email`, `password`,role) VALUES ('{$name}','{$email}','{$pass}', '{$role}')";
    if(mysqli_query($conn,$sql1)){
      echo"success";
      
    }
  }
}

// Login Code
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
      if(isset($row['role'])){
       echo $row['role'];
     }  
   }
   
 }
}        
}
// Change user password
if(isset($_POST['changepass'])){
  $old = mysqli_real_escape_string($conn, $_POST['oldpass']);
  $new = mysqli_real_escape_string($conn,$_POST['newpass']);
  $con = mysqli_real_escape_string($conn,$_POST['conpass']);  
  $newpass = password_hash($new, PASSWORD_BCRYPT);
  $conpass = password_hash($con, PASSWORD_BCRYPT);
  $sql1 = "SELECT * FROM `user_ragistration` WHERE email = '".$_SESSION['email']."'";
  $result = $conn->query($sql1);
  $row =$result->fetch_assoc();
  $oldpassword = $row['password'];
  $oldpass_decode = password_verify($old, $oldpassword);
  if($oldpass_decode == 1 ){
    if($new == $con){
      $sql="UPDATE `user_ragistration` SET `password`='$conpass' WHERE email = '".$_SESSION['email']."'";
      $result1 = $conn->query($sql);           
      echo "success";
    }
    else{
      echo "notmatch";
    }
  }  
}

if(isset($_POST['delete'])){
  $deleteid = $_POST['deleteid'];
  $sql = "DELETE FROM `submit_requester` WHERE  request_id = '$deleteid'";
  $result = $conn->query($sql);

}



?>