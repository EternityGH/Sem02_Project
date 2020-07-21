<?php 

if (isset($_SESSION['data'])) {
	# code...	
	$Name 			= $_SESSION['data']['WatchName'];
	$Price 			= $_SESSION['data']['Price'];
	$Diameter 		= $_SESSION['data']['Diameter'];
	$Thickness  	= $_SESSION['data']['Thickness'];
	$Material 		= $_SESSION['data']['Material'];
	$Strap 			= $_SESSION['data']['Strap'];
	$StrapWidth 	= $_SESSION['data']['StrapWidth'];
	$Movement 		= $_SESSION['data']['Movement'];
	$Glass 			= $_SESSION['data']['Glass'];
	$WaterResistant = $_SESSION['data']['WaterResistant'];
	$Type 			= $_SESSION['data']['Type'];
} else {
	$Name 			= '';
	$Price 			= '';
	$Diameter 		= '';
	$Thickness  	= '';
	$Material 		= '';
	$Strap 			= '';
	$StrapWidth 	= '';
	$Movement 		= '';
	$Glass 			= '';
	$WaterResistant = '';
	$Type			= '';
}

$checkedLady 	= '';
$checkedMen		= '';

if ($Type != '') {
	# code...
	if ($Type == 0) {
		# code...
		$checkedMen = 'checked';
	} else if ($Type == 1) {
		$checkedLady = 'checked';
	}
}
	

include('header.php');

?>

<!-- Begin Page Content -->
	<div class="container-fluid">

	  	<!-- Page Heading -->
  		<h1 class="h3 mb-4 text-gray-800">Add Watch</h1>
  		<div class="card shadow mb-4">
        	<div class="card-header py-3">
              	<h6 class="float-left m-0 font-weight-bold text-primary">Watch Add Form</h6>
              	<a href="watch.php" class="float-right">Back to view watches</a>
            </div>
            <div class="card-body add-watch">
              	<form action="add_watch.php" method="post" enctype="multipart/form-data">
              		<div class="row">
						<div class="form-group col-sm-4">
						    <label>Watch Name</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$Name?>"  name="Name">
						    <?php 
					    	if(isset($_SESSION['error']['Name'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['Name']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group col-sm-4">
						    <label>Diameter</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$Diameter?>"  name="Diameter">
						    <?php 
					    	if(isset($_SESSION['error']['Diameter'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['Diameter']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group col-sm-4">
						    <label>Price</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$Price?>" name="Price">
						    <?php 
					    	if(isset($_SESSION['error']['Price'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['Price']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group col-sm-6">
					      	<label>Brand</label>
					      	<select name="Brand" class="form-control">
					      		<?php 
					      		foreach ($brands as $brand) {
					      			# code...
					      		?>
					        	<option value="<?=$brand['ID']?>"><?=$brand['BrandName']?></option>
					        	<?php
					        	}
					      		?>
					      	</select>
					    </div>
					    <div class="form-group col-sm-6">
						    <label>Case Thickness</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$Thickness?>" name="Thickness">
						    <?php 
					    	if(isset($_SESSION['error']['Thickness'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['Thickness']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group col-sm-4">
						    <label>Material</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$Material?>" name="Material">
						    <?php 
					    	if(isset($_SESSION['error']['Material'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['Material']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group col-sm-4">
						    <label>Strap</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$Strap?>" name="Strap">
						    <?php 
					    	if(isset($_SESSION['error']['Strap'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['Strap']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group col-sm-4">
						    <label>Strap width</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$StrapWidth?>" name="StrapWidth">
						    <?php 
					    	if(isset($_SESSION['error']['StrapWidth'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['StrapWidth']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group col-sm-4">
						    <label>Movement</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$Movement?>" name="Movement">
						    <?php 
					    	if(isset($_SESSION['error']['Movement'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['Movement']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group col-sm-4">
						    <label>Glass Face</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$Glass?>" name="Glass">
						    <?php 
					    	if(isset($_SESSION['error']['Glass'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['Glass']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					  	<div class="form-group col-sm-4">
						    <label>Water resistant</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$WaterResistant?>" name="WaterResistant">
						    <?php 
					    	if(isset($_SESSION['error']['WaterResistant'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['WaterResistant']?></p>
						    <?php 
						    	}
						    ?>
					  	</div>
					    <div class="form-group col-sm-6">
							<label>Image</label> <sup>*</sup><br>
					    	<input type="file" multiple="true" name="image[]" accept="image/gif, image/jpeg, image/png">
					    	 <?php 
					    	if(isset($_SESSION['error']['image'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['image']?></p>
						    <?php 
						    	}
						    ?>
					    </div>
					    <div class="col-sm-12">
					    	<div class="form-check form-check-inline">
						  		<label class="form-check-label pr-3">For Men</label>
							  	<input class="form-check-input" type="radio" <?=$checkedMen?> name="Type" value="0">
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label pr-3">For Lady</label>
							  	<input class="form-check-input" type="radio" <?=$checkedLady?> name="Type" value="1">
							</div>
							<?php 
					    	if(isset($_SESSION['error']['Type'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['Type']?></p>
						    <?php 
						    	}
						    ?>
					    </div>
					    	
					  	
							
				  	</div>
					<button type="submit" name="add" class="btn btn-primary btn-block">Add</button>
					
				</form>
            </div>
      	</div>

	</div>
<!-- /.container-fluid -->



<?php 

include('footer.php');

?>

<?php 

if (isset($_GET['success'])) {
  # code...
?>
<script type="text/javascript">
  Swal.fire(
      'Add!',
      'Your watch has been added.',
      'success'
    )
</script>
<?php
}

?>