<?php 

include_once('View/header.php');

?>

		<!-- Main-wrapper -->
		<div class="main-wrapper">
			<!-- Phần slider -->
			<div class="slider">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  	<ol class="carousel-indicators">
				    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				  	</ol>
				  	<div class="carousel-inner">
				    	<div class="carousel-item active">
				    		<div class="button btn btn-primary">
				    			Shop Now
				    		</div>
				    	</div>
				    	<div class="carousel-item">
				    		<div class="button btn btn-primary">
				    			View more
				    		</div>
				    	</div>
				  	</div>
				  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Previous</span>
				  	</a>
				  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
				    	<span class="sr-only">Next</span>
				  	</a>
				</div>
			</div>
			<!-- Hết phần slider -->
			
			<!-- Best-seller-for-men -->
			<div class="best-seller">
				<div class="container">
					<div class="title">
						<h3><b>Men</b> Best Sellers</h3>
					</div>
					<?php 
					if ($menWatches > 0) {
					
					?>
					<div class="row">
						<?php 
						for($i = 0; $i < count($menWatches); $i++){
							if ($i == 4) {
								break;	
							}
							
							$image = json_decode($menWatches[$i]['Image'], true);

							$spec = json_decode($menWatches[$i]['Specification'], true);

						?>
						<div class="col-sm-3 product">
							<div class="hover">
								<div class="image">
									<a href="watch.php?id=<?=$menWatches[$i]['ID']?>"><img src="<?=$image[0]?>" class="img-fluid show-img" alt="product"></a>
									<a href="watch.php?id=<?=$menWatches[$i]['ID']?>">
										<img src="<?=$image[1]?>" class="hover-product">
									</a>
	 							</div>
	 							<div class="info">
	 								<span class="brand"><?=$menWatches[$i]['BrandName']?> -</span> <span class="diameter"><?=$spec['Diameter']?>MM</span>
	 								<h6 class="name">
	 									<a href="watch.php?id=<?=$menWatches[$i]['ID']?>"><?=$menWatches[$i]['WatchName']?></a>
	 								</h6>
	 								<p class="price"><?=$menWatches[$i]['Price']?> $</p>
	 							</div>
								<form>
									<button>Add Cart <i class="fas fa-cart-plus"></i></button>
									<a href="">Quick View <i class="fas fa-search-plus"></i></a>
								</form>
							</div>
						</div>
						<?php 
						}
						?>
					</div>
					<?php 
					}
					?>
				</div>
			</div>
			<!-- het phan bestseller for lady -->

			<!-- Best-seller-for-men -->
			<div class="best-seller">
				<div class="container">
					<div class="title">
						<h3><b>Lady</b> Best Sellers</h3>
					</div>
					<?php 
					if ($ladyWatches > 0) {
					
					?>
					<div class="row">
						<?php 
						for($i = 0; $i < count($ladyWatches); $i++){
							if ($i == 4) {
								break;	
							}
							
							$image = json_decode($ladyWatches[$i]['Image'], true);

							$spec = json_decode($ladyWatches[$i]['Specification'], true);

						?>
						<div class="col-sm-3 product">
							<div class="hover">
								<div class="image">
									<a href="watch.php?id=<?=$ladyWatches[$i]['ID']?>"><img src="<?=$image[0]?>" class="img-fluid show-img" alt="product"></a>
									<a href="watch.php?id=<?=$ladyWatches[$i]['ID']?>">
										<img src="<?=$image[1]?>" class="hover-product">
									</a>
	 							</div>
	 							<div class="info">
	 								<span class="brand"><?=$ladyWatches[$i]['BrandName']?> -</span> <span class="diameter"><?=$spec['Diameter']?>MM</span>
	 								<h6 class="name">
	 									<a href="watch.php?id=<?=$ladyWatches[$i]['ID']?>"><?=$ladyWatches[$i]['WatchName']?></a>
	 								</h6>
	 								<p class="price"><?=$ladyWatches[$i]['Price']?> $</p>
	 							</div>
								<form>
									<button>Add Cart <i class="fas fa-cart-plus"></i></button>
									<a href="">Quick View <i class="fas fa-search-plus"></i></a>
								</form>
							</div>
						</div>
						<?php 
						}
						?>
					</div>
					<?php 
					}
					?>
				</div>
			</div>
			<!-- het phan bestseller for lady -->

		</div>
		<!-- End Main-wrapper -->
<?php 
include_once('footer.php');
?>
		