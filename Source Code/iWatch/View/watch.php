<?php 

include_once('header.php');

?>

<div class="nav-view">
	<div class="container">
        <a href="index.php" title="Home" class="home">Home</a>
        <span aria-hidden="true">/</span>
        <a href="<?=$type?>_watch.php" >fashionable watch for <?=$type?></a> 
        <span aria-hidden="true">/</span>
        <span class="breadcrumb--last"><?=$WatchName?></span>
    </div>
</div>

<div class="product-view">

	<div class="container info">
		<div class="row">
			<div class="col-sm-1 block-1">
				<ul>
					<?php 
					for ($i = 0; $i < count($images); $i++) {
						if ($i == 0) {
							# code...
							$current = 'current';
						} else {
							$current = '';
						}
					?>
					<li><img src="<?=$images[$i]?>" class="img-fluid <?=$current?>" id="<?=$i?>"></li>
					<?php 
					}
					?>
				</ul>
			</div>

			<div class="col-sm-5 block-2 tiles">
				<?php 
				for ($i = 0; $i < count($images); $i++) {
					if ($i == 0) {
						# code...
						$current = 'current';
					} else {
						$current = '';
					}
				?>
				<div class="tile <?=$current?>" data-scale="1.6" data-image="<?=$images[$i]?>"></div>
				<?php 
				}
				?>
			</div>

			<div class="col-sm-1"></div>
			<div class="col-sm-5 block-3">
				<div class="brand-name">
					<span><?=$BrandName?> -</span> <span><?=$spec['Diameter']?>MM</span>
				</div>
				<div class="watch-name">
					<span><?=$WatchName?></span>
				</div>
				<div class="star">
					<span class="spr-badge" id="spr_badge_8556186881" data-rating="4.523809523809524"><span class="spr-starrating spr-badge-starrating">
						<?php 
						for($i = 1; $i <= (int)$RatingDivi; $i++){
						?>
						<i class="fas fa-star"></i>
						<?php
						}

						for($i = 1; $i <= (5 - (int)$RatingDivi); $i++ ){
						?>
						<i class="far fa-star"></i>
						<?php
						}
						?>
					</span>
						<span class="spr-badge-caption"><?=$countRating?> reviews</span>
					</span>
				</div>
				<div class="price">
					<span><?=$Price?>$</span>
				</div>
				<div class="addition-straps">
				    <h2>
						20% DISCOUNT FOR ACCESSORIES WHEN PURCHASING (AUTOMATIC APPLICATION AT THE PAYMENT STEP)
					</h2>
				    <div class="addition-straps__list slick-initialized slick-slider">
				        <div class="slick-list draggable">
				            <div class="slick-track">
				                <div class="strap-product slick-slide slick-current slick-active">
				                    <div class="strap-product__image">
				                        <img src="//cdn.shopify.com/s/files/1/1663/1821/products/Black_S_100x100@2x.jpg?v=1558366049" alt="BLACK LEATHER 20MM" width="100">
				                    </div>
				                    <p class="strap-product__price">+19$</p>
				                    <h3>BLACK LEATHER 20MM</h3>
				                    <span class="checkmark"></span>
				                </div>
				                <div class="strap-product slick-slide slick-active" >
				                    <div class="strap-product__image">
				                        <img src="//cdn.shopify.com/s/files/1/1663/1821/products/Cognac_S_100x100@2x.jpg?v=1555030495" alt="COGNAC LEATHER 20MM" width="100">
				                    </div>
				                    <p class="strap-product__price">+19$</p>
				                    <h3>COGNAC LEATHER 20MM</h3>
				                    <span class="checkmark"></span>
				                </div>
				                <div class="strap-product slick-slide slick-active">
				                    <div class="strap-product__image">
				                        <img src="//cdn.shopify.com/s/files/1/1663/1821/products/S1_100x100@2x.jpg?v=1538555863" alt="STELLA CUFF - SILVER" width="100">
				                    </div>
				                    <p class="strap-product__price">+19$</p>
				                    <h3>STELLA CUFF - SILVER</h3>
				                    <span class="checkmark"></span>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<a href="">Add to Cart</a>
					</div>
					<div class="col-sm-6">
						<a href="" class="payment">Payment Now</a>
					</div>
				</div>
				<div class="product-tabs">
					<div class="product-tabs-nav">
	                  	<a class="product-tabs__nav--current short-desc">Feature</a>
	                    <a class="guarantee" >WARRANTy POLICY</a>
	                    <a class="shipping" >DELIVERY POLICY</a>
	                </div>
	                <div class="product-tabs__panel">
	                  	<div id="short-desc" class="product-tabs__tab current">
							<p>
								Kashmir watches combined with metal wires are not only a great choice for modern style, but also a durable and most suitable version for daily movements.
							</p>
							<p>-<span>&nbsp;</span><strong>Sapphire Glass</strong><span>&nbsp;</span> superior scratch protection and shiny watch face protection<br>-<span>&nbsp;</span><strong>Material</strong>: Stainless Steel 316L - is the standard of a high-end timepiece, making your watch durable over time<br>-<span>&nbsp;</span><strong>Water Resistant 3ATM</strong><span>&nbsp;</span>- Features that make you feel confident and comfortable in every daily activity.&nbsp;<br>-<span>&nbsp;</span><strong>Easy strap change</strong><span>&nbsp;</span>- Transform your style in 30 seconds without any specialized tools
							</p>
	              		</div>
	                  	<div id="guarantee" class="product-tabs__tab">
	                  		<p>Guarantee<strong> 10 years</strong> with errors from the manufacturer.</p>
							<p>Replace batteries<strong> Free forever</strong>.</p>
							<p><strong>1 switch 1 </strong>within 3 days with products that fail from the manufacturer in a completely intact state and have no signs of use.
							</p>
						</div>
	                  	<div id="shipping" class="product-tabs__tab">
	              			<p><strong> Free shipping</strong> with order from 50USD</p>
							<p>Shipping time: 3-7 days (depending on the destination)</p>
						</div>
	                  
	                </div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- Intro website -->
<div class="intro-website">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 block-intro">
				<svg xmlns="http://www.w3.org/2000/svg" width="36.761" height="36.759"><g id="credit-card" transform="translate(0 -.011)"><g id="Group_159" data-name="Group 159" transform="translate(0 .011)"><g id="Group_158" data-name="Group 158"><path id="Path_112" d="M35.785 12.626L24.145.985a3.345 3.345 0 0 0-4.719 0L.974 19.436a3.344 3.344 0 0 0 0 4.719l1.436 1.436 9.647 9.647h-1.335a.766.766 0 0 0 0 1.532h15.316a.766.766 0 1 0 0-1.532h-8.147l17.894-17.893a3.341 3.341 0 0 0 0-4.719zM34.7 16.262L16.251 34.713a1.792 1.792 0 0 1-1.274.526h-.006a1.792 1.792 0 0 1-1.273-.526L4.035 25.05 21.754 7.33a.766.766 0 1 0-1.083-1.083L2.952 23.967l-.894-.894a1.813 1.813 0 0 1 0-2.553l18.45-18.452a1.813 1.813 0 0 1 2.553 0L27.2 6.211 9.485 23.931a.766.766 0 0 0 1.083 1.083l17.72-17.72 6.412 6.415a1.808 1.808 0 0 1 0 2.553z" fill="#fff" data-name="Path 112" transform="translate(0 -.011)"></path><path id="Path_113" d="M167.992 305.165a.766.766 0 0 0-1.083 0l-6.026 6.026a.766.766 0 0 0 1.083 1.083l6.026-6.026a.766.766 0 0 0 0-1.083z" fill="#fff" data-name="Path 113" transform="translate(-149.123 -283.047)"></path><path id="Path_114" d="M193.522 384.841l-2.472 2.472a.766.766 0 1 0 1.083 1.083l2.472-2.472a.766.766 0 0 0-1.083-1.083z" fill="#fff" data-name="Path 114" transform="translate(-177.125 -357.002)"></path><path id="Path_115" d="M252.954 353.166l-.325.325a.766.766 0 1 0 1.083 1.083l.325-.325a.766.766 0 0 0-1.083-1.083z" fill="#fff" data-name="Path 115" transform="translate(-234.282 -327.602)"></path><path id="Path_116" d="M348.167 160.893a.766.766 0 0 0-1.083 0l-3.249 3.249a.766.766 0 0 0 0 1.083l2.165 2.166a.766.766 0 0 0 1.083 0l3.249-3.249a.766.766 0 0 0 0-1.083zm-1.625 4.874l-1.083-1.083 2.166-2.166 1.083 1.083z" fill="#fff" data-name="Path 116" transform="translate(-318.939 -149.134)"></path><path id="Path_117" d="M310.439 56.183a.763.763 0 0 0 .542-.224l.325-.325a.766.766 0 0 0-1.083-1.083l-.325.325a.766.766 0 0 0 .542 1.307z" fill="#fff" data-name="Path 117" transform="translate(-287.439 -50.427)"></path><path id="Path_118" d="M100.115 355.157l-.325.325a.766.766 0 0 0 1.083 1.083l.325-.325a.766.766 0 0 0-1.083-1.083z" fill="#fff" data-name="Path 118" transform="translate(-92.418 -329.45)"></path></g></g></g></svg>
				<p>
					Easy and secure <br> payment
				</p>
			</div>
			<div class="col-sm-3 block-intro">
				<svg xmlns="http://www.w3.org/2000/svg" width="54.605" height="34.541"><defs><style>.cls-1{fill:#fff}</style></defs><g id="shipped" transform="translate(0 -94.062)"><g id="Group_147" data-name="Group 147" transform="translate(0 94.062)"><g id="Group_146" data-name="Group 146"><path id="Path_102" d="M50.782 108.705l-1.414-5.656a.855.855 0 0 0 .677-.836v-.913a3.6 3.6 0 0 0-3.591-3.591h-6.441v-1.88a1.769 1.769 0 0 0-1.767-1.767H5.415a1.769 1.769 0 0 0-1.767 1.767v15.5a.855.855 0 1 0 1.71 0v-15.5a.057.057 0 0 1 .057-.057h32.831a.057.057 0 0 1 .057.057v15.5a.855.855 0 1 0 1.71 0v-.969H50.1a2.8 2.8 0 0 1 2.66 1.94H50.1a.855.855 0 0 0-.855.855v1.824a2.682 2.682 0 0 0 2.679 2.679h.969v3.762h-2.234a5.413 5.413 0 0 0-10.235 0h-.412v-6.441a.855.855 0 0 0-1.71 0v6.441H20.564a5.413 5.413 0 0 0-10.235 0H5.415a.057.057 0 0 1-.057-.057v-1.881h3.7a.855.855 0 1 0 0-1.71H.855a.855.855 0 1 0 0 1.71h2.793v1.881a1.769 1.769 0 0 0 1.767 1.767h4.618v.057a5.415 5.415 0 0 0 10.83 0v-.057h19.265v.057a5.415 5.415 0 1 0 10.83 0v-.057h2.792a.855.855 0 0 0 .855-.855v-9.12a4.51 4.51 0 0 0-3.823-4.45zM40.013 99.42h6.441a1.883 1.883 0 0 1 1.881 1.881v.057h-8.322zm0 9.234v-5.586h7.6l1.4 5.586zm-24.567 18.24a3.7 3.7 0 1 1 3.7-3.7 3.709 3.709 0 0 1-3.699 3.699zm30.1 0a3.7 3.7 0 1 1 3.7-3.7 3.709 3.709 0 0 1-3.704 3.699zm7.353-10.944h-.969a.97.97 0 0 1-.969-.969v-.969h1.938v1.938z" class="cls-1" data-name="Path 102" transform="translate(0 -94.062)"></path></g></g><g id="Group_149" data-name="Group 149" transform="translate(13.68 121.421)"><g id="Group_148" data-name="Group 148"><path id="Path_103" d="M130.034 350.6a1.767 1.767 0 1 0 1.767 1.767 1.769 1.769 0 0 0-1.767-1.767z" class="cls-1" data-name="Path 103" transform="translate(-128.267 -350.597)"></path></g></g><g id="Group_151" data-name="Group 151" transform="translate(43.775 121.421)"><g id="Group_150" data-name="Group 150"><path id="Path_104" d="M412.222 350.6a1.767 1.767 0 1 0 1.767 1.767 1.769 1.769 0 0 0-1.767-1.767z" class="cls-1" data-name="Path 104" transform="translate(-410.455 -350.597)"></path></g></g><g id="Group_153" data-name="Group 153" transform="translate(21.887 117.774)"><g id="Group_152" data-name="Group 152"><path id="Path_105" d="M218.85 316.393h-12.768a.855.855 0 0 0 0 1.71h12.768a.855.855 0 1 0 0-1.71z" class="cls-1" data-name="Path 105" transform="translate(-205.227 -316.393)"></path></g></g><g id="Group_155" data-name="Group 155" transform="translate(1.824 114.126)"><g id="Group_154" data-name="Group 154"><path id="Path_106" d="M28.9 282.188H17.957a.855.855 0 1 0 0 1.71H28.9a.855.855 0 1 0 0-1.71z" class="cls-1" data-name="Path 106" transform="translate(-17.102 -282.188)"></path></g></g><g id="Group_157" data-name="Group 157" transform="translate(15.504 102.27)"><g id="Group_156" data-name="Group 156"><path id="Path_107" d="M159.6 171.273a.855.855 0 0 0-1.209 0l-7.6 7.6-3.955-3.955a.855.855 0 0 0-1.209 1.209l4.56 4.56a.855.855 0 0 0 1.209 0l8.208-8.208a.855.855 0 0 0-.004-1.206z" class="cls-1" data-name="Path 107" transform="translate(-145.37 -171.023)"></path></g></g></g></svg>
				<p>
					Free Delivering On All U.s Orders over 50$
				</p>
			</div>
			<div class="col-sm-3 block-intro">
				<svg xmlns="http://www.w3.org/2000/svg" width="24.794" height="34.857"><g id="shield" transform="translate(-3.476 -3.137)"><path id="Path_108" d="M42.153 197.826a.826.826 0 1 1-.826-.826.826.826 0 0 1 .826.826zm0 0" fill="#fff" data-name="Path 108" transform="translate(-37.024 -181.067)"></path><path id="Path_110" d="M52.439 76.887a.826.826 0 0 0 .917 0l5.681-3.787a14.021 14.021 0 0 0 6.257-11.69V46.875a.826.826 0 0 0-.564-.784l-11.57-3.879a.827.827 0 0 0-.526 0l-11.571 3.88a.826.826 0 0 0-.564.784v5.611a.826.826 0 0 0 1.653 0V47.47l10.744-3.6 10.744 3.6v13.94a12.371 12.371 0 0 1-5.521 10.314L52.9 75.206l-5.224-3.483a12.369 12.369 0 0 1-5.521-10.314V59.1a.826.826 0 0 0-1.653 0v2.312A14.02 14.02 0 0 0 46.757 73.1zm0 0" fill="#fff" data-name="Path 110" transform="translate(-37.024 -39.032)"></path><path id="Path_111" d="M104.527 207.839a2.479 2.479 0 0 0 3.506 0l6.612-6.612a2.479 2.479 0 0 0-3.506-3.506l-4.859 4.859-1.553-1.553a2.479 2.479 0 0 0-3.506 3.506zm-2.137-5.639a.826.826 0 0 1 1.168 0l2.137 2.137a.827.827 0 0 0 1.169 0l5.443-5.443a.826.826 0 1 1 1.168 1.168l-6.612 6.612a.825.825 0 0 1-1.168 0l-3.306-3.306a.825.825 0 0 1 .001-1.168zm0 0" fill="#fff" data-name="Path 111" transform="translate(-92.06 -181.062)"></path></g></svg>
				<p>
					10-year guarantee with manufacturers error
				</p>
			</div>
			<div class="col-sm-3 block-intro">
				<svg xmlns="http://www.w3.org/2000/svg" width="28.961" height="34.873"><g id="quality" transform="translate(-39.838)"><path id="Path_143" d="M68.757 31.042L64.14 19.9a.556.556 0 0 0-1.028.426L67.285 30.4l-3.807-1.1a.556.556 0 0 0-.642.266l-1.912 3.472-4.478-10.816A11.221 11.221 0 1 0 45.324 17.9L39.88 31.042a.557.557 0 0 0 .669.747l4.491-1.3 2.256 4.1a.557.557 0 0 0 .487.288h.031a.557.557 0 0 0 .483-.343l4.314-10.414a.556.556 0 0 0-1.028-.426l-3.87 9.344-1.913-3.476a.557.557 0 0 0-.642-.266l-3.807 1.1 4.779-11.533a11.183 11.183 0 0 0 8.189 3.562c.333 0 .663-.016.989-.044l5.032 12.148a.556.556 0 0 0 .483.343h.031a.556.556 0 0 0 .487-.288l2.256-4.1 4.491 1.3a.556.556 0 0 0 .669-.747zM44.219 11.213a10.1 10.1 0 1 1 10.1 10.1 10.111 10.111 0 0 1-10.1-10.1z" class="cls-1" data-name="Path 143"></path><path id="Path_144" d="M160.86 64.672a.557.557 0 0 0-.437-.377l-3.745-.628-1.754-3.367a.556.556 0 0 0-.987 0l-1.755 3.367-3.744.628a.556.556 0 0 0-.305.939l2.66 2.709-.559 3.755a.556.556 0 0 0 .8.58l3.4-1.693 3.4 1.693a.556.556 0 0 0 .8-.58l-.559-3.755 2.66-2.709a.557.557 0 0 0 .125-.562zm-3.78 2.689a.556.556 0 0 0-.153.472l.443 2.973-2.691-1.34a.556.556 0 0 0-.5 0l-2.691 1.34.443-2.973a.556.556 0 0 0-.153-.472l-2.106-2.145 2.965-.5a.556.556 0 0 0 .4-.292l1.389-2.666 1.389 2.666a.556.556 0 0 0 .4.292l2.965.5z" class="cls-1" data-name="Path 144" transform="translate(-100.112 -55.548)"></path><path id="Path_145" d="M131.3 39.548a.556.556 0 0 0-.625.479 7.874 7.874 0 1 1 0-2.08.556.556 0 1 0 1.1-.146 8.986 8.986 0 1 0 0 2.372.556.556 0 0 0-.479-.625z" data-name="Path 145" transform="translate(-68.549 -27.774)"></path></g></svg>
				<p>
					Commitment <br> 100% Authentics
				</p>
			</div>
		</div>
	</div>
</div>
<!-- Hết phần intro-website -->

<!-- Phan specifications -->
<div class="specifications">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="<?=$images['0']?>" class="img-fluid">
			</div>
			<div class="col-sm-6 info">
				<h2 class="text-center">Specifications</h2>
				<div class="row">
					<div class="col-6">
						Diameter
					</div>
					<div class="col-6">
						<?=$spec['Diameter']?>mm
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						Case Thickness
					</div>
					<div class="col-6">
						<?=$spec['Thickness']?>mm
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						Material
					</div>
					<div class="col-6">
						<?=$spec['Material']?>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						Strap Width
					</div>
					<div class="col-6">
						<?=$spec['StrapWidth']?>mm
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						Strap
					</div>
					<div class="col-6">
						<?=$spec['Strap']?>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						Movement
					</div>
					<div class="col-6">
						<?=$spec['Movement']?>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						Glass
					</div>
					<div class="col-6">
						<?=$spec['Glass']?>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						Water Resistant
					</div>
					<div class="col-6">
						<?=$spec['WaterResistant']?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Het Phan specification -->
<div class="feed-back">
	<div class="container">
		<div class="title">
			<h1>CUSTOMER REVIEWS</h1>
		</div>
		<div class="header">
			<div class="row">
				<div class="col-6">
					<span class="spr-badge" id="spr_badge_8556186881" data-rating="4.523809523809524"><span class="spr-starrating spr-badge-starrating">
						<?php 
						for($i = 1; $i <= (int)$RatingDivi; $i++){
						?>
						<i class="fas fa-star"></i>
						<?php
						}

						for($i = 1; $i <= (5 - (int)$RatingDivi); $i++ ){
						?>
						<i class="far fa-star"></i>
						<?php
						}
						?>
					</span>
						<span class="spr-badge-caption">Based on <?=$countRating?> reviews</span>
					</span>
				</div>
				<div class="col-6">
					<a class="open-write-review">Write a review</a>
				</div>
			</div>
		</div>
		<div id="message" class="alert alert-success mt-5" role="alert" style="display: none;">
			<h5 class="alert-heading">Send Review Successfully!</h5>
			<p></p>
		</div>
		<div id="error-message" class="alert alert-danger mt-5" role="alert" style="display: none;">
			<h5 class="alert-heading">Send Review Failed!</h5>
			<p></p>
		</div>
		<div class="form-review" id="form-review">
			<h6>Write Review</h6>
			<form method="post" action="watch.php">
				<?php 
				if (isset($_SESSION['Login'])) {
				?>
					<input type="text" hidden name="IdCustomer" value="<?=$_SESSION['Login']['ID']?>">
					<input type="text" hidden name="Avatar" value="<?=$_SESSION['Login']['Avatar']?>">
				<?php
				}
				?>
				
				<input type="text" hidden name="IdWatch" value="<?=$id?>">

				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Name</label>
							<?php 
							if (isset($_SESSION['Login'])) {
							?>
								<input type="text" class="form-control" readonly name="Name" value="<?=$_SESSION['Login']['LastName']?>">
							<?php
							} else {
							?>
							<input type="text" class="form-control" placeholder="Enter You Name" name="Name">
							<?php 
							}
							?>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Email</label>
							<?php 
							if (isset($_SESSION['Login'])) {
							?>
								<input type="email" class="form-control" readonly name="Email" value="<?=$_SESSION['Login']['Email']?>">
							<?php
							} else {
							?>
							<input type="email" class="form-control" placeholder="Enter You Email" name="Email">
							<?php 
							}
							?>
						</div>
					</div>
				</div>
					
				<div class="form-group">
					<label>Rating</label><br>
					<div class="stars">
						<input class="star star-5" id="star-5" type="radio" name="star" value="5" />
					    <label class="star star-5" for="star-5"></label>
					    <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
					    <label class="star star-4" for="star-4"></label>
					    <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
					    <label class="star star-3" for="star-3"></label>
					    <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
					    <label class="star star-2" for="star-2"></label>
					    <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
					    <label class="star star-1" for="star-1"></label>
					</div>
					<?php 
				    	if(isset($_SESSION['error']['Rating'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['Rating']?></p>
				    <?php 
				    	}
				    ?>
				</div>
				<div class="form-group">
					<label>Review Title</label>
					<input type="text" class="form-control" placeholder="Give your a review title" name="Title">
					<?php 
				    	if(isset($_SESSION['error']['Title'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['Title']?></p>
				    <?php 
				    	}
				    ?>
				</div>

				<div class="form-group">
					<label>Body of Review (1500) characters remaining</label>
					<textarea class="form-control" name="content" placeholder="Write your comments here" rows="7"></textarea>
					<?php 
				    	if(isset($_SESSION['error']['Content'])){
				    ?>
				    		<p class="error-mess"><?=$_SESSION['error']['Content']?></p>
				    <?php 
				    	}
				    ?>
				</div>
				<button type="submit" class="btn-form-review" name="send">Send Review</button>
			</form>
		</div>

		<div class="review-customer">
			<?php 
	if ($reviews != Null) {
		foreach ($reviews as $review) {
			if ($review['IdComment'] == 0) {
				$date = date_create($review['CreateAt']);
				$date =  date_format($date, 'd-m-Y');
			?>
			<div class="one-review mt-5">
				<div class="info-cus">
					<?php 
					if ($review['Avatar'] != '') {
					

					?>

					<img src="<?=$review['Avatar']?>" width="30px" height="30px">

					<?php	
					} else {
					?>
						<img src="lib/images/avatar/default.png" width="30px" height="30px">
					<?php	
						}
					?>
					
					<span class="name"><?=$review['Name']?></span>
					<span> - <?=$date?></span>
				</div>
				<div class="rating">
					<span class="spr-badge" id="spr_badge_8556186881" data-rating="4.523809523809524"><span class="spr-starrating spr-badge-starrating">
						<?php 
						for($i = 1; $i <= (int)$review['Rating']; $i++){
						?>
						<i class="fas fa-star"></i>
						<?php
						}

						for($i = 1; $i <= (5 - (int)$review['Rating']); $i++ ){
						?>
						<i class="far fa-star"></i>
						<?php
						}
						?>
					</span>
					</span>
				</div>
				<div class="title">
					<h6><?=$review['Title']?></h6>
				</div>
				<div class="content">
					<p><?=$review['Content']?></p>
				</div>
				<div class="timing">
					<a>Reply</a>
				</div>
				<?php 
				$data = array();
				foreach ($values as $replies) {
					foreach ($replies as $reply) {
						if ($review['ID'] == $reply['IdComment']) {
							$data[] = $reply; 
						}
					}
				}

				if (!empty($data)) {
					
				
				?>
				<div class="reply">
					<?php 
						foreach ($data as $reply) {
							
						
					
					
					?>
					<div class="one-reply">
						<div class="info-cus">
							<img src="<?=$reply['Avatar']?>" width="30px" height="30px">
							<span class="name"><?=$reply['Name']?></span>
							<?php 
							$dateReply = date_create($reply['CreateAt']);
							$dateReply =  date_format($dateReply, 'd-m-Y');
							?>
							<span> - <?=$dateReply?></span>
						</div>
						<div class="content">
							<p><?=$reply['Reply']?></p>
						</div>
						<div class="timing">
							<a>Reply</a>
						</div>
						<?php 
						if (isset($_SESSION['Login'])) {
						?>
						<div class="form-reply">
							<form method="post" action="watch.php">
								<input type="text" hidden name="IdCustomer" value="<?=$_SESSION['Login']['ID']?>">
								<input type="text" hidden name="IdWatch" value="<?=$id?>">
								<input type="text" hidden name="id" value="<?=$review['ID']?>">
								<input type="text" hidden name="name" value="<?=$_SESSION['Login']['LastName']?>">
								<input type="text" hidden name="avatar" value="<?=$_SESSION['Login']['Avatar']?>">
								<div class="form-group">
									<textarea class="form-control" name="reply" rows="5"></textarea>
								</div>
								<button type="submit" name="send-reply" >Send</button>
							</form>
						</div>
						<?php 
						} else {

						?>
						<div class="form-reply">
							<div class="login-now">
								<p>You must <a href="login.php">login</a> to reply!</p>
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
				<?php 
				}
				
				if (isset($_SESSION['Login'])) {
				?>
				<div class="form-reply">
					<form method="post" action="watch.php">
						<input type="text" hidden name="IdCustomer" value="<?=$_SESSION['Login']['ID']?>">
						<input type="text" hidden name="IdWatch" value="<?=$id?>">
						<input type="text" hidden name="id" value="<?=$review['ID']?>">
						<input type="text" hidden name="name" value="<?=$_SESSION['Login']['LastName']?>">
						<input type="text" hidden name="avatar" value="<?=$_SESSION['Login']['Avatar']?>">
						<div class="form-group">
							<textarea class="form-control" name="reply" rows="5"></textarea>
						</div>
						<button type="submit" name="send-reply" >Send</button>
					</form>
				</div>
				<?php 
				} else {

				?>
				<div class="form-reply">
					<div class="login-now">
						<p>You must <a href="login.php">login</a> to reply!</p>
					</div>
				</div>
				<?php 
				}
				?>
			</div>
			<?php 
			}
		}
	}
			?>
		</div>
	</div>
</div>





<?php 

include_once('footer.php');

?>