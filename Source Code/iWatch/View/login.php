<?php 

include_once('header.php');

$email = '';

if (isset($_SESSION['email'])){
	$email = $_SESSION['email'];
}

?>
	
	<!-- Đây là phần login -->
	<div class="login-page">
		<div class="container">
			<h3>Login</h3>
			<div class="sign-in">
				<form method="get" id="form-login">
					<div class="form-group">
					    <label>Email</label>
					    <input type="email" class="form-control" value="<?=$email?>" name="Email"  placeholder="Enter email">
				  	</div>
				  	<div class="form-group">
					    <label>Password</label>
					    <input type="password" class="form-control" name="Password"  placeholder="Enter password">
				  	</div>
				  	<?php 
				    	if(isset($_SESSION['error'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']?></p>
				    <?php 
				    	}
				    ?>
				  	<button type="submit" name="Login">Login</button>
				  	<div class="form-group flex">
					  	<a href="register.php">Create Account</a>
					  	<a href="">Forgot Password?</a>
				  	</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Hết Phần login -->

<?php 

include_once('footer.php');


?>