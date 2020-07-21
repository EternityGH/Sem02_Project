<?php 

if (isset($_SESSION['Login'])) {
	
	//Lưu biến
	$ID  		= $_SESSION['Login']['ID'];
	$FirstName  = $_SESSION['Login']['FirstName'];
	$LastName   = $_SESSION['Login']['LastName'];
	$Email   	= $_SESSION['Login']['Email'];
	$Phone   	= $_SESSION['Login']['Phone'];
	$Address   	= $_SESSION['Login']['Address'];
	$Avatar 	= $_SESSION['Login']['Avatar'];
	$Gender		= $_SESSION['Login']['Gender'];


	//Nếu update dữ liệu thành công
	if (isset($_SESSION['data-account'])) {
		$FirstName  = $_SESSION['data-account']['FirstName'];
		$LastName   = $_SESSION['data-account']['LastName'];
		$Phone   	= $_SESSION['data-account']['Phone'];
		$Address   	= $_SESSION['data-account']['Address'];
		$Avatar 	= $_SESSION['data-account']['Avatar'];
		$Gender		= $_SESSION['data-account']['Gender'];
	}

	//Thiết lập giới tính
	$male 	= '';
	$female = '';
	if ($Gender == 'Male') {
		$male = 'checked';
	} elseif ($Gender == 'Female') {
		$female = 'checked';	
	}


} else {
	header('location: login.php');
}

include_once('header.php');

?>

<!-- Bat dau phan account-page -->
<div class="account-page">
	<div class="container">
		<div class="title">
			<h3>Account Information</h3>
		</div>
		<div class="form-info">
			<form action="account.php" method="post" enctype="multipart/form-data" id="form-update">
				<div class="row">
					<div class="col-sm-3">
						<img src="<?=$Avatar?>" class="img-fluid" alt="avatar" id="preview">
						<input type="file" name="avatar" id="avatar-img">
						<input type="text" hidden name="link" value="<?=$Avatar?>">
						<div class="mt-4 pt-4" style="border-top: 1px solid #1c1c1c">
							<a href="change_password.php" style="color: #1c1c1c">(+) Change Your Password</a><br>
							<a href="change_email.php" style="color: #1c1c1c">(+) Change Your Email</a>
						</div>
					</div>
					<div class="col-sm-1"></div>
					<div class="col-sm-8">
						<input type="text" hidden value="<?=$ID?>" name="ID">
						<div class="form-group">
						    <label>First Name</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$FirstName?>" name="FirstName">
						    <?php 
					    	if(isset($_SESSION['error']['FirstName'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['FirstName']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group">
						    <label>Last Name</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$LastName?>" name="LastName">
						    <?php 
					    	if(isset($_SESSION['error']['LastName'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['LastName']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group">
						    <label>Phone</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$Phone?>" name="Phone" placeholder="Enter Phone">
						    <?php 
					    	if(isset($_SESSION['error']['Phone'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['Phone']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group">
						    <label>Address</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$Address?>" name="Address" placeholder="Enter Address">
						    <?php 
					    	if(isset($_SESSION['error']['Address'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['Address']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group mb-0">
					  		<label class="pb-0">Gender</label> <sup>*</sup>
					  	</div>
					  	<div class="form-check form-check-inline ml-5">
					  		<label class="form-check-label pr-3">Male</label>
						  	<input class="form-check-input" <?=$male?> type="radio" name="Gender" value="Male">
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label pr-3">Female</label>
						  	<input class="form-check-input" <?=$female?> type="radio" name="Gender" value="Female">
						</div>
						<?php 
				    	if(isset($_SESSION['error']['Gender'])){
					    ?>
					    		<p class="error-mess"><?=$_SESSION['error']['Gender']?></p>
					    <?php 
					    	}
					    ?>
						<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#confirm-update">
                            Update
                      	</button>
						<div class="modal fade" id="confirm-update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          	<div class="modal-dialog">
                              	<div class="modal-content">
                                  	<div class="modal-header">
                                      	Update Your Profile
                                  	</div>
                                  	<div class="modal-body">
                                      	Are you Sure?
                                  	</div>
                                  	<div class="modal-footer">
                                      	<button type="submit" name="update" id="update">Update</button>
                                      	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  	</div>
                              	</div>
                          	</div>
                        </div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Het phan account-page -->

<?php 

include_once('footer.php');

?>