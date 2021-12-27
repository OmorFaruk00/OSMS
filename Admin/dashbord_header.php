<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo TITLE ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="../CSS/style.css">
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
	<!-- Top Nav -->
	<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap shadow">
		<a href="user-profile.php" class="navbar-brand col-sm-3 col-md 2 font-weight-bold mr-0">OSMS</a>
		<h4 class="text-white px-5">Hi <?php echo  $_SESSION['name']; ?></h4>		
	</nav>
	<!-- Top Nav -->
	<div class="container_fluid" style="margin-top: 70px; margin-left: 20px;">
		<div class="row">
			<!-- Start Side Bar 1st column-->
			<div class="col-sm-2 bg-light sidebar py-3 ">
				<div class="sidebar-sticky navbar">
					<ul class="nav flex-column ">
						<li class="nav-item "> <a class="nav-link <?php if(PAGE == 'Dashborad'){echo 'active';} ?>" href="dashboard.php"><i class="fas fa-tachometer mr-2"></i>Dashbord</a></li>
						<li class="nav-item "> <a class="nav-link <?php if(PAGE == 'Workrder'){echo 'active';} ?>" href="work_order.php"><i class=" fab fa-accessible-icon mr-2">Work Order</i></a></li>
						<li class="nav-item "> <a class="nav-link <?php if(PAGE == 'Requests'){echo 'active';} ?>" href="requests.php"><i class="fas fa-address-card mr-2"></i>Requests</i></a></li>
						<li class="nav-item "> <a class="nav-link <?php if(PAGE == 'Assets'){echo 'active';} ?>" href="assets.php"><i class="fas fa-coins mr-2"></i>Assets</i></a></li>
						<li class="nav-item "> <a class="nav-link <?php if(PAGE == 'Technician'){echo 'active';} ?>" href="technician.php"><i class="fas fa-cogs mr-2"></i>Technician</i></a></li>
						<li class="nav-item "> <a class="nav-link <?php if(PAGE == 'Requester'){echo 'active';} ?>" href="requester.php"><i class="fas fa-user mr-2"></i>Users</i></a></li>
						<li class="nav-item "> <a class="nav-link <?php if(PAGE == 'Sellreport'){echo 'active';} ?>" href="sell_report.php"><i class="fas fa-file-alt mr-2"></i>Sell Report</i></a></li>
						<li class="nav-item "> <a class="nav-link <?php if(PAGE == 'Workreport'){echo 'active';} ?>" href="work_report.php"><i class="fas fa-file-alt mr-2"></i>Work Report</i></a></li>
						<li class="nav-item "> <a class="nav-link <?php if(PAGE == 'ChangePassword'){echo 'active';} ?>" href="change_password.php"><i class=" fas fa-key "> Change Password</i></a></li>
						<li class="nav-item "> <a class="nav-link <?php if(PAGE == 'Logout'){echo 'active';} ?> " href="log_out.php"><i class=" fas fa-sign-out-alt mr-2">Logout</i></a></li>
					</ul>
				</div>
			</div>
			