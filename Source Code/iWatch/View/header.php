<?php 
require_once('Model/Model.php');
$Model 	= new Model();
$brands = $Model->selectAll('brand'); 

if (!empty($brands)) {
	foreach ($brands as $brand) {
		$BrandNames[] = $brand['BrandName'];
	}
} else {
	$BrandNames = array();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- My Css -->
	<link rel="stylesheet" type="text/css" href="lib/css/style.css">
		
	<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>

	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	
	<!-- Font Open Sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap&subset=vietnamese" rel="stylesheet">


	<title>iWatches - Why not?</title>
</head>
<body>
	
	<!-- Wrapper -->
	<div class="wrapper">
		<!-- Header-wrapper -->
		<div class="header-wrapper">
			<!-- Top-header -->
			<div class="top-header">
				<div class="container">
					<div class="left">
						<p>Free Delivering On All U.s Orders over 50$</p>
					</div>
					<div class="right">
						<div class="menu-hover">
						  	
						  	<?php 
						  	if (isset($_SESSION['Login'])) {
						  	?>
						  	<a class="dropdown-toggle" href="">
						  		<img src="<?=$_SESSION['Login']['Avatar']?>">
						    	Hello, <?=$_SESSION['Login']['LastName']?>
						  	</a>
					  		<div class="menu-hidden">
						    	<a class="item" href="account.php"><i class="fas fa-user"></i> Profile</a>
						    	<?php 
						    	if ($_SESSION['Login']['Role'] == 0) {
						    		# code...
						    	?>
								<a class="item" href="Admin/index.php"><i class="fas fa-user-cog"></i> Admin Panel</a>
						    	<?php		
						    	}
						    	?>
						    	<a class="item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
						  	</div>

						  	<?php		
						  	} else {
						  	?>
						  	<a class="dropdown-toggle" href="">
						    	<i class="fas fa-user-circle"></i> My Account
						  	</a>
						  	<div class="menu-hidden">
						    	<a class="item" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
						    	<a class="item" href="register.php"><i class="fas fa-user-plus"></i> Register</a>
						  	</div>
						  	<?php 
					  		}
						  	?>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- end top-header -->
			<div class="bottom-header">
				<nav class="navbar navbar-expand-lg navbar-light container">
				  	<a class="navbar-brand" href="index.php"><span>iWATCH</span>SHOP</a>
				  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    	<span class="navbar-toggler-icon"></span>
				  	</button>
				  	<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				    	<ul class="navbar-nav">
				    		<li class="nav-item">
					        	<a class="nav-link" href="men_watch.php">Men</a>
					      	</li>
				    		<li class="nav-item">
					        	<a class="nav-link" href="lady_watch.php">Lady</a>
					      	</li>
					      	<li class="nav-item dropdown">
					        	<a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Brand</a>
					        	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					        		<?php 
					        		foreach ($BrandNames as $BrandName) {
					        			
					        		?>
							    	<a class="dropdown-item" href="brand_watch.php?BrandName=<?=$BrandName?>">
							    		<i class="fab fa-accusoft"></i> <?=$BrandName?> Watch
							    	</a>
								    <?php
								    }
					        		?>
							  	</div>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link" href="#">Blog</a>
					      	</li>	
					      	<li class="nav-item">
					        	<a class="nav-link" href="#">About Us</a>
					      	</li>
					      	<li class="nav-item">
					        	<a class="nav-link" href="contact.php">Contact Us</a>
					      	</li>
				    	</ul>
				  	</div>
				</nav>
			</div>
		</div>
		<!-- End Header-Wrapper -->