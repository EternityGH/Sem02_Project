<?php 

require_once('header.php');

?>


<!-- Phần đăng ký thành viên mơi -->
<div class="register-page">
	<div class="container">
		<h3>Change Password</h3>
		<div class="register-form">
			<form method="get" id="form-register">
				<input type="text" hidden name="id" value="<?=$_SESSION['Login']['ID']?>">
				<div class="form-group">					
				    <label>Old Password</label>
				    <input type="password" class="form-control" name="OldPassword" placeholder="Enter old password">
				    <?php 
				    	if(isset($_SESSION['error']['OldPassword'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['OldPassword']?></p>
				    <?php 
				    	}
				    ?>
			  	</div>
			  	<div class="form-group">
				    <label>New Password</label>
				    <input type="password" class="form-control" name="Password" placeholder="Enter new password">
				    <?php 
				    	if(isset($_SESSION['error']['Password'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['Password']?></p>
				    <?php 
				    	}
				    ?>
			  	</div>
			  	<div class="form-group">
				    <label>Repeat New Password</label>
				    <input type="password" class="form-control" name="RePassword" placeholder="Repeat new password">
				   	<?php 
				    	if(isset($_SESSION['error']['RePassword'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['RePassword']?></p>
				    <?php 
				    	}
				    ?>
			  	</div>
			  	<button type="submit" name="update" >Change Password</button>
			</form>
		</div>
	</div>
</div>
<!-- hết Phần đăng ký thành viên mơi -->


<?php 

require_once('footer.php');

?>