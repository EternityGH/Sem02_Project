<?php 

foreach ($watches as $watch) {
	$ID 		= $watch['ID'];
 	$WatchName  = $watch['WatchName'];
	$Price   	= $watch['Price'];
	$spec   	= $watch['Specification'];
	$IdBrand   	= $watch['IdBrand'];
	$Type		= $watch['Type'];
	$Image 		= $watch['Image'];
}

$spec = json_decode($spec, true);

//Thiết lập giới tính
$male 	= '';
$female = '';
if ($Type == '0') {
	$male = 'checked';
} elseif ($Type == '1') {
	$female = 'checked';	
}

$Images = json_decode($Image, true);

include('header.php');


?>

<!-- Begin Page Content -->
	<div class="container-fluid">

	  	<!-- Page Heading -->
  		<h1 class="h3 mb-4 text-gray-800">Edit Watch</h1>
		<div class="card shadow mb-4">
        	<div class="card-header py-3">
              	<h6 class="float-left m-0 font-weight-bold text-primary">Watch Edit Form</h6>
              	<a href="watch.php" class="float-right">Back to View Watches</a>
            </div>
            <div class="card-body edit-customer">
              	<form action="edit_watch.php?id=<?=$ID?>" method="post" enctype="multipart/form-data" id="form-edit">
					
					<input type="text" hidden value="<?=$ID?>" name="ID">
					<div class="row">
						<div class="form-group col-sm-4">
						    <label>Watch Name</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$WatchName?>"  name="Name">
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
						    <input type="text" class="form-control" value="<?=$spec['Diameter']?>" name="Diameter">
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
						    <input type="text" class="form-control" value="<?=$Price?>"  name="Price">
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
						      		$select = '';
						      		if ($IdBrand == $ID) {
						      			# code...
						      			$select = 'selected';
						      		}
						      	?>
					        	<option <?=$select?> value="<?=$brand['ID']?>"><?=$brand['BrandName']?></option>
					        	<?php 
						      	}
						      	?>
					      	</select>
					    </div>
					    <div class="form-group col-sm-6">
						    <label>Case Thickness</label> <sup>*</sup>
						    <input type="text" class="form-control" value="<?=$spec['Thickness']?>" name="Thickness">
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
						    <input type="text" class="form-control" value="<?=$spec['Material']?>"  name="Material">
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
						    <input type="text" class="form-control" value="<?=$spec['Strap']?>"  name="Strap">
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
						    <input type="text" class="form-control" value="<?=$spec['StrapWidth']?>" name="StrapWidth">
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
						    <input type="text" class="form-control" value="<?=$spec['Movement']?>"  name="Movement">
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
						    <input type="text" class="form-control" value="<?=$spec['Glass']?>" name="Glass">
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
						    <input type="text" class="form-control" value="<?=$spec['WaterResistant']?>"  name="WaterResistant">
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
							<img src="../<?=$Images['0']?>" width="150px" height="150px">
					    	<input type="file" multiple="true" name="image[]" accept="image/gif, image/jpeg, image/png">
					    	<?php 
					    	foreach ($Images as $Img) {
					    		# code...
					    	?>
					    	<input type="text" hidden value="<?=$Img?>" name="img[]">
					    	<?php 
					    	}
					    	?>
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
							  	<input class="form-check-input" <?=$male?> type="radio" name="Type" value="0">
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label pr-3">For Lady</label>
							  	<input class="form-check-input" <?=$female?> type="radio" name="Type" value="1">
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
					
					<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#confirm-update">
                            Update
                  	</button>
					<div class="modal fade" id="confirm-update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      	<div class="modal-dialog">
                          	<div class="modal-content">
                              	<div class="modal-header">
                                  	Update
                              	</div>
                              	<div class="modal-body">
                                  	Are you Sure?
                              	</div>
                              	<div class="modal-footer">
                                  	<button type="submit" name="edit_watch" class="btn btn-primary btn-block">Update</button>
                                  	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              	</div>
                          	</div>
                      	</div>
                    </div>
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
      'Edit!',
      'Your watch has been editted.',
      'success'
  )
</script>
<?php
}

?>