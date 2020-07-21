<?php 

include_once('header.php');

?>


<div class="main-wrapper">
	<div class="banner-lady-watch">
		<div class="container">
			<div class="title">
				fashionable watches for lady
			</div>
		</div>
	</div>
	<div class="search-men-watch">
		<div class="container">
			<div class="cover">
				<div class="about">
					<?php echo count($ladyWatches) ?> Products
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
				<h3><b>Lady</b> Watches</h3>
			</div>
			<div class="row">
				<?php 
			if (count($ladyWatches) > 0) {
				for($i = 0; $i < count($ladyWatches); $i++){
					
					$image = json_decode($ladyWatches[$i]['Image'], true);

					$spec = json_decode($ladyWatches[$i]['Specification'], true);

				?>
				<div class="col-sm-3 product">
					<div class="hover">
						<div class="image">
							<a href="watch.php?id=<?=$ladyWatches[$i]['ID']?>"><img src="<?=$image[0]?>" class="img-fluid" alt="product"></a>
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