<?php 
include "../dbconection.php";
session_start();
if(!isset($_SESSION['is_login'])){
if(isset($_POST['login'])){                       
                        $email = mysqli_real_escape_string($conn, $_POST['email']);
                        $password = mysqli_real_escape_string($conn,$_POST['password']);
                        $sql = "SELECT * FROM `admin_login` WHERE email =  '$email' AND password ='$password'";
                         $result = mysqli_query($conn,$sql) or die("Query Failed");
                        if(mysqli_num_rows($result) > 0 ){
                          while($row = mysqli_fetch_assoc($result)){                            
                            $_SESSION['admin_login'] = true;
                            $_SESSION['name'] = $row['name'];
                            $_SESSION['email'] = $row['email'];
                           header("Location:http://localhost/OSMS/Admin/dashboard.php");                             
                          }
                    }
                    else{                      
                                                                                           
                       $error_message = "<div class='alert alert-danger mt-2'> Enter Valid Email and Password</div>";
                    }
                }
         }else{
          header("Location:http://localhost/OSMS/user_profile.php");
         }      

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo TITLE ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="CSS/style.css">
  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">  
</head>
<body>
<section id="signin" class="bg-light py-5">	
   <div class="container mb-5">
   	<div class="pt-5 text-center">
     <i class="fas fa-stethoscope fa-2x pr-2 text-danger"></i>
     <span class=" mt-5 font-weight-bold" style="font-size: 30px;">Online Service Management System</span>
   	</div>
   	<div class="text-center">
   		<i class="fas fa-user-secret fa-1x pr-2 text-danger"></i><span style="font-size: 20px;">Admin Area (Demo)<span>
   	</div>
     <div class="row mt-5">
      <div class="col-md-6 offset-md-3">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
