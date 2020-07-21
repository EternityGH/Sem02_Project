<?php 

require_once('header.php');

?>


<!-- Phần đăng ký thành viên mơi -->
<div class="register-page">
	<div class="container">
		<h3>Change Email</h3>
		<div class="register-form">
			<?php 
			if (isset($_GET['mail']) && $_GET['mail'] == 'success') {
				$code = md5('email-code');
			?>
			<form method="get" id="form-register">
				<input type="text" hidden name="email-code" value="<?=$_GET["$code"]?>">
				<div class="form-group">					
				    <label>Enter Code</label>
				    <input type="text" class="form-control" name="Code" placeholder="Enter code">
				    <?php 
				    	if(isset($_SESSION['error']['Code'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['Code']?></p>
				    <?php 
				    	}
				    ?>
			  	</div>
			  	<button type="submit" name="enter-code" >Submit</button>
			</form>
			<?php
			} elseif (isset($_GET['change-email'])) {
				# code...
			?>
			<form method="get" id="form-register">
				<input type="text" hidden name="id" value="<?=$_SESSION['Login']['ID']?>">
				<div class="form-group">					
				    <label>New Email</label>
				    <input type="email" class="form-control" name="NewEmail" placeholder="Enter new email">
				    <?php 
				    	if(isset($_SESSION['error']['NewEmail'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['NewEmail']?></p>
				    <?php 
				    	}
				    ?>
			  	</div>
			  	<div class="form-group">					
				    <label>Repeat Email</label>
				    <input type="email" class="form-control" name="ReEmail" placeholder="Repeat new email">
				    <?php 
				    	if(isset($_SESSION['error']['ReEmail'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['ReEmail']?></p>
				    <?php 
				    	}
				    ?>
			  	</div>
			  	<button type="submit" name="change" >Change Email</button>
			</form>

			<?php

			} else {
			?>
			<form method="get" id="form-register">
				<input type="text" hidden name="id" value="<?=$_SESSION['Login']['ID']?>">
				<div class="form-group">					
				    <label>Old Email</label>
				    <input type="email" class="form-control" name="OldEmail" placeholder="Enter old email">
				    <?php 
				    	if(isset($_SESSION['error']['OldEmail'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['OldEmail']?></p>
				    <?php 
				    	}
				    ?>
			  	</div>
			  	<button type="submit" name="update" >Submit</button>
			</form>
			<?php 
			}
			?>
		</div>
	</div>
</div>
<!-- hết Phần đăng ký thành viên mơi -->


<?php 

require_once('footer.php');

?>