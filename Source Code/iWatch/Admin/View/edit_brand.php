<?php 

foreach ($brands as $brand) {
	$ID 		= $brand['ID'];
	$BrandName  = $brand['BrandName'];
	$spec   	= $brand['Specification'];
}

$spec = json_decode($spec, true);

include('header.php');


?>

<!-- Begin Page Content -->
	<div class="container-fluid">

	  	<!-- Page Heading -->
  		<h1 class="h3 mb-4 text-gray-800">Edit Brand</h1>
		<div class="card shadow mb-4">
        	<div class="card-header py-3">
              	<h6 class="float-left m-0 font-weight-bold text-primary">Brand Edit Form</h6>
              	<a href="brand.php" class="float-right">Back to View Brands</a>
            </div>
            <div class="card-body edit-customer edit-brand">
              	<form action="edit_brand.php?id=<?=$ID?>" method="post" enctype="multipart/form-data" id="form-edit">
					
					<input type="text" hidden value="<?=$ID?>" name="ID">
					<div class="form-group">
					    <label>Brand Name</label> <sup>*</sup>
					    <input type="text" class="form-control" value="<?=$BrandName?>"  name="Name">
					    <?php 
				    	if(isset($_SESSION['error']['BrandName'])){
					    ?>
					    		<p class="error-mess"><?=$_SESSION['error']['BrandName']?></p>
					    <?php 
					    	}
					    ?>
				  	</div>
				  	<div class="form-group">
					    <label>Introduce</label> <sup>*</sup>
					     <textarea class="form-control" rows="7" name="Intro"><?=$spec['Intro']?>
					     	<?php 
					    	if(isset($_SESSION['error']['Intro'])){
						    ?>
						    		<p class="error-mess"><?=$_SESSION['error']['Intro']?></p>
						    <?php 
						    	}
						    ?>
					     </textarea>
				  	</div>
				    <div class="form-group">
						<label>Image</label> <sup>*</sup><br>
						<img src="../<?=$spec['Background']?>" width="300px" height="150px"><br>
				    	<input type="file" class="mt-5 mb-3" name="Background" accept="image/gif, image/jpeg, image/png">
				    	<input type="text" hidden value="<?=$spec['Background']?>" name="BackgroundOld">
				    </div>
					<button type="submit" name="edit_brand" class="btn btn-primary btn-block">Update</button>
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
      'Your Brand has been editted.',
      'success'
  )
</script>
<?php
}

?>