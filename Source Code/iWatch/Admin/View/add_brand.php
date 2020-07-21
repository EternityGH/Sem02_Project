<?php 

if (isset($_SESSION['data'])) {
	# code...

	$BrandName  = $_SESSION['data']['BrandName'];
	$Intro 	  	= $_SESSION['data']['Intro'];

} else {

	$BrandName  = '';
	$Intro 	  	= '';

}

include('header.php');

?>

<!-- Begin Page Content -->
	<div class="container-fluid">

	  	<!-- Page Heading -->
  		<h1 class="h3 mb-4 text-gray-800">Add Brand</h1>
  		<div class="card shadow mb-4">
        	<div class="card-header py-3">
              	<h6 class="float-left m-0 font-weight-bold text-primary">Brand Add Form</h6>
              	<a href="brand.php" class="float-right">Back to view brands</a>
            </div>
            <div class="card-body add-watch add-brand">
              	<form action="add_brand.php" method="post" enctype="multipart/form-data" id="form-add">
					<div class="form-group">
					    <label>Brand Name</label> <sup>*</sup>
					    <input type="text" class="form-control" value="<?=$BrandName?>" name="Name">
					    <?php 
				    	if(isset($_SESSION['error']['BrandName'])){
					    ?>
					    		<p class="error-mess"><?=$_SESSION['error']['BrandName']?></p>
					    <?php 
					    	}
					    ?>
				  	</div>
				  	<div class="form-group">
					    <label>Intro</label> <sup>*</sup>
					    <textarea class="form-control" rows="7" name="Intro"><?=$Intro?></textarea>
					    <?php 
				    	if(isset($_SESSION['error']['Intro'])){
					    ?>
					    		<p class="error-mess"><?=$_SESSION['error']['Intro']?></p>
					    <?php 
					    	}
					    ?>
				  	</div>
				  	<div class="form-group">
					    <label>Background</label> <sup>*</sup><br>
					    <input type="file" name="background" accept="image/gif, image/jpeg, image/png">
					    <?php 
				    	if(isset($_SESSION['error']['Image'])){
					    ?>
					    		<p class="error-mess"><?=$_SESSION['error']['Image']?></p>
					    <?php 
					    	}
					    ?>
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
      'Your brand has been added.',
      'success'
    )
</script>
<?php
}

?>