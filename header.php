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
            <a class="nav-link " href="services.php">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="signin.php">Sign Up</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link " href="login.php">Log In</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link " href="contacts.php">Contacts</a>
          </li>   
        </ul>
      </div> 
    </div> 
  </nav>