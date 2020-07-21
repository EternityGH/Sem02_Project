<?php 

include_once('header.php');
?>


<div class="main-wrapper">
	<div class="banner-men-watch">
		<div class="container">
			<div class="title">
				fashionable watches for men
			</div>
		</div>
	</div>
	<div class="search-men-watch">
		<div class="container">
			<div class="cover">
				<div class="about">
					<?php echo count($menWatches) ?> Products
				</div>
				<div class="right">
					<input type="text" class="form-control" placeholder="Search...">
				</div>
			</div>
				
		</div>
		
	</div>


	<!-- Phan product-men-watch -->
	<div class="product-men-watch">
		<div class="container">
			<div class="title">
				<h3><b>Men</b> Watches</h3>
			</div>
			<div class="row">
				<?php 
			if (count($menWatches) > 0) {
				for($i = 0; $i < count($menWatches); $i++){
					
					$image = json_decode($menWatches[$i]['Image'], true);

					$spec = json_decode($menWatches[$i]['Specification'], true);

				?>
				<div class="col-sm-3 product">
					<div class="hover">
						<div class="image">
							<a href="watch.php?id=<?=$menWatches[$i]['ID']?>"><img src="<?=$image[0]?>" class="img-fluid" alt="product"></a>
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
			}
				?>
			</div>
		</div>
	</div>
	<!-- Het phan product-men-watch -->
</div>


<?php 
include_once('footer.php');
?>