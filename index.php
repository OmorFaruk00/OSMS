

<!DOCTYPE html>
<html lang="en">
<head>
  <title>OSMS</title>
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

  <nav class="navbar navbar-expand-md bg-danger navbar-dark fixed-top">
    <div class="container">
      <a class="navbar_brand" href="index.php">OSMS</a>
      <span class="navbar-text text-white">Customer's Happiness is  Our Aim</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav ml-auto custom_nav ">
          <li class="nav-item">
            <a class="nav-link " href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#service">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="signin.php">Sign Up</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link " href="login.php">Log In</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link " href="#contacts">Contacts</a>
          </li>   
        </ul>
      </div> 
    </div> 
  </nav>

  <!-- start header -->
  <header class="jumbotron bg_img">
    <div class="header_side pt-5 text-white ">
      <h1>Welcome to OSMS</h1>
      <p >Customer's Happiness is  Our Aim</p>
      <a href="login.php" class="btn btn-primary mr-4">Log In</a>
      <a href="signin.php" class="btn btn-danger ">Sign Up</a>
    </div>
  </header>
  <!-- end header -->

  <!-- start osms service -->
  <div class="container">
    <div class="jumbotron ">
      <h3 class="text-center pb-5">OSMS Service</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Nam id voluptate aliquid laudantium qui corporis error dolore similique dicta doloribus tenetur aut veritatis, quisquam, sapiente deleniti sit temporibus possimus voluptatibus ad iste quod illum? Eligendi iure nisi repellendus quo libero. Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Nam id voluptate aliquid laudantium qui corporis error dolore similique dicta doloribus tenetur aut veritatis, quisquam, sapiente deleniti sit temporibus possimus voluptatibus ad iste quod illum? Eligendi iure nisi repellendus quo libero.</p>
    </div>
  </div>
  <!-- end osms service -->

  <!-- start our service section -->
  <section class="py-5" id="service">
    <div class="container text-center ">
     <h2 class="py-5 ">Our Service</h2>
     <div class="row ">
       <div class="col-sm-4">
         <a href=""><i class="fas fa-tv fa-8x mt-4 text-success"></i></a>
         <h4 class="mt-4">Electronic Appliances</h4>
       </div>
       <div class="col-sm-4">
         <a href=""><i class="fas fa-sliders-h fa-8x mt-4 text-primary"></i></a>
         <h4 class="mt-4">Priventive Maintenance</h4>
       </div>
       <div class="col-sm-4">
         <a href=""><i class="fas fa-cogs fa-8x mt-4 text-info"></i></a>
         <h4 class="mt-4">Fault Repair</h4>
       </div>
     </div>
   </div>
 </section>
 <!-- end our service section -->

 <!-- signin grom -->
 <section id="signin" class="bg-light py-5">
   <div class="container mb-5">
     <h2 class="text-center mt-5">Create an Account</h2>
     <div class="row mt-5">
      <div class="col-md-6 offset-md-3">
        <form action="signin.php" method="post" class="shadow-lg p-5 bg-white">        
          <div class="form-group">
            <i class="fas fa-user"></i><label for="" class="font-weight-bold pl-2">Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name">           
          </div>
          <div class="form-group">
            <i class="fas fa-user"></i><label for="" class="font-weight-bold pl-2">Email</label>
            <input type="text" class="form-control" placeholder="Enter Email" name="email">           
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="" class="font-weight-bold pl-2">Password</label>
            <input type="text" class="form-control" placeholder="Enter Password" name="password">           
          </div>
          <button class="btn btn-danger btn-block font-weight-bold shadow-sm mt-5" name="signin">Sign Up</button>         
        </form>
      </div>      
    </div>
  </div>
</section>

<!-- signin grom -->

<!-- happy customer -->
<section class="jumbotron">
  <div class="container">
    <h2 class="text-center mb-5 pb-5 ">Happy Customers</h2>
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="card shadow-lg mb-2 text-center ">
          <div class="card-body">
            <img src="images/card1.jpg" class="img-fluid mt-4 mb-4" alt="" style=" height: 100px;width: 100px; border-radius: 50%;">
            <h4 class="card-title">John Dawson</h4>
            <p class="card-text mb-4">Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Eligendi recusandae harum temporibus ducimus laborum sint!</p>             
          </div>           
        </div>         
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="card shadow-lg mb-2 text-center ">
          <div class="card-body">
            <img src="images/card2.jpeg" class="img-fluid mt-4 mb-4" alt="" style=" height: 100px;width: 100px; border-radius: 100px;">
            <h4 class="card-title">Jack Wyatt</h4>
            <p class="card-text mb-4">Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Eligendi recusandae harum temporibus ducimus laborum sint!</p>             
          </div>           
        </div>         
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="card shadow-lg mb-2 text-center ">
          <div class="card-body">
            <img src="images/card3.jpeg" class="img-fluid mt-4 mb-4" alt="" style=" height: 100px;width: 100px; border-radius: 100px;">
            <h4 class="card-title">John David</h4>
            <p class="card-text mb-4">Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Eligendi recusandae harum temporibus ducimus laborum sint!</p>             
          </div>           
        </div>         
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="card shadow-lg mb-2 text-center ">
          <div class="card-body">
            <img src="images/card4.jpeg" class="img-fluid mt-4 mb-4" alt="" style=" height: 100px;width: 100px; border-radius: 100px;">
            <h4 class="card-title">John Everett</h4>
            <p class="card-text mb-4">Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Eligendi recusandae harum temporibus ducimus laborum sint!</p>             
          </div>           
        </div>         
      </div>

    </div>    
  </div>
</div>   
</div>   
</section>
<!-- happy customer -->


<!-- contact section -->
<section id="contacts" class="mb-5">
  <div class="container">
    <h2 class="text-center  py-5">Contact Us</h2>
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <form action="" method="post">
          <input type="text" class="form-control" name="name" placeholder=" Name"><br>

          <input type="text" class="form-control" name="subject" placeholder=" Subject"><br>

          <input type="text" class="form-control" name="email" placeholder="E-mail"><br>

          <textarea class="form-control" name="message" placeholder="How Can We Help you"></textarea><br>

          <input type="submit" class="btn btn-primary"value="Send" name="submit">
        </form>
      </div>

      <div class="col-md-4 text-center">
        <strong>Headquater</strong><br>
        OSMS pvt Ltd,<br>
        Dhaka,Bangladesh <br>
        Phone: 000000000 <br><br>
        
        <strong>Branch</strong><br>
        OSMS pvt Ltd,<br>
        khulna,Bangladesh <br>
        Phone: 000000000 <br>   
      </div>
    </div>
  </div>  
</section>
<!-- contact section -->


<!-- footer -->

<footer class="container-fluid bg-dark mt-5 text-white">
  <div class="container">
    <div class="row py-3">
      <div class="col-md-6 ">
        <span class="pr-2">Follow Us:</span>
        <a href="" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
        <a href="" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
        <a href="" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
        <a href="" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
      </div>

      <div class="col-md-6  text-right">
        <small>Designed by Omor Faruk &copy;2021</small>
        <small class="ml-2"><a href="Admin/index.php" class="footer_admin">Admin Login</a></small>
      </div>
    </div>
  </div>
  
</footer>
<!-- footer -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
