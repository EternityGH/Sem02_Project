<?php 

require_once('header.php');


$data = array(
	'FirstName' => '', 
	'LastName'	=> '', 
	'Email'		=> '', 
	'Password' 	=> '',
);

if(isset($_SESSION['data'])){
	$data = $_SESSION['data'];
}
?>


<!-- Phần đăng ký thành viên mơi -->
<div class="register-page">
	<div class="container">
		<h3>Create Account</h3>
		<div class="register-form">
			<form method="get" id="form-register">
				<input type="text" hidden name="action" value="reg-form">
				<div class="form-group">
				    <label>First Name</label>
				    <input type="text" class="form-control" value="<?=$data['FirstName']?>" name="FirstName" placeholder="Enter first name">
				    <?php 
				    	if(isset($_SESSION['error']['FirstName'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['FirstName']?></p>
				    <?php 
				    	}
				    ?>
			  	</div>
			  	<div class="form-group">
				    <label>Last Name</label>
				    <input type="text" class="form-control" value="<?=$data['LastName']?>" name="LastName" placeholder="Enter last name">
				    <?php 
				    	if(isset($_SESSION['error']['LastName'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['LastName']?></p>
				    <?php 
				    	}
				    ?>
			  	</div>
			  	<div class="form-group">
				    <label>Email</label>
				    <input type="email" class="form-control" value="<?=$data['Email']?>" name="Email" placeholder="Enter email">
				   	<?php 
				    	if(isset($_SESSION['error']['Email'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['Email']?></p>
				    <?php 
				    	}
				    ?>
			  	</div>
			  	<div class="form-group">
				    <label>Password</label>
				    <input type="password" class="form-control" name="Password" placeholder="Enter password">
				    <?php 
				    	if(isset($_SESSION['error']['Password'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['Password']?></p>
				    <?php 
				    	}
				    ?>
			  	</div>
			  	<div class="form-group">
				    <label>Repeat password</label>
				    <input type="password" class="form-control" name="RePassword" placeholder="Enter Repassword">
				    <?php 
				    	if(isset($_SESSION['error']['RePassword'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['RePassword']?></p>
				    <?php 
				    	}
				    ?>
			    </div>
			  	<button type="submit" name="register" >Create Account</button>
			  	<div class="form-group flex">
				  	<a href="login.php">Login</a>
			  	</div>
				  	
			</form>
		</div>
	</div>
</div>
<!-- hết Phần đăng ký thành viên mơi -->


<?php 

require_once('footer.php');

?>