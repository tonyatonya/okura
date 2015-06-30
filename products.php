<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
	<title>OKURA</title>
	<?php 
		$pagename = 'products';
		include('inc_header.php');
	?>
</head>
<body>
<?php include('inc_top.php'); ?>
<section id="catbanner">
	<?php include('inc_mainmenu.php'); ?>
	<img src="images/productsbanner.jpg" alt="productsbanner">
</section>
<section id="promotion">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="section-title">PROMOTIONS</h2>
				<ul class="promotionslider">	
				<?php for($i=0;$i<3;$i++){ ?>
				<li>
					<div class="row">
						<div class="col-xs-4"><a class="promotion-banner" href="#"><img src="images/promotionbanner.jpg" alt="promotionbanner"></a></div>
						<div class="col-xs-4"><a class="promotion-banner" href="#"><img src="images/promotionbanner.jpg" alt="promotionbanner"></a></div>
						<div class="col-xs-4"><a class="promotion-banner" href="#"><img src="images/promotionbanner.jpg" alt="promotionbanner"></a></div>
					</div>
				</li>
				<?php } ?>
			</ul>
				<script type="text/javascript">
				$(document).ready(function(){
					var slider = $('.promotionslider').bxSlider({
			            mode: 'horizontal', //'horizontal','fade'
			            speed: 500,
			            auto: true,
			            infiniteLoop: true,
			            hideControlOnEnd: true,
			            useCSS: false,
			            onSlideAfter: function() {
				            slider.startAuto();
				        }
			        });
				})
			</script>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="product-search">
				<div class="col-xs-6">
					<span>
						<label>SEARCH : </label>
						<select>
							<option>PRODUCT CATEGORY</option>
						</select>
						<select>
							<option>PRODUCT GROUP</option>
						</select>
					</span>
				</div>
				<div class="col-xs-6">
					<span>
						<input type="text" placeholder="KEY WORD">
						<button><i class="icon-search"></i> Search</button>
					</span>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-3 left-col">
			<?php include('inc_bestseller.php'); ?>
			<?php include('inc_howto.php'); ?>
		</div>
		<div class="col-xs-9 right-col products-section">
			<h2 class="section-title">ALL PRODUCTS</h2>
			<div class="row">
				<?php for($i=0;$i<9;$i++){ ?>
					<div class="col-xs-4">
				<div class="product-child">
					<div class="product-label label-new"></div>
					<figure class="product-child-img">
						<img src="images/sampleproduct.jpg" alt="productname">
					</figure>
					<div class="price">
						<p>155 Baht</p>
						<h3>Product Name</h3>
						<div class="btn-holder">
							<a class="add-cart">ADD TO CART</a>
						</div>
						<a class="more" href="products-detail.php">viewmore</a>
					</div>
				</div>
			</div>
				<?php } ?>
			</div>
			<nav class="pagenav">
				<ul class="pagination">
				    <li>
				      <a href="#" aria-label="Previous">
				        <span aria-hidden="true">prev</span>
				      </a>
				    </li>
				    <li class="active"><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#">4</a></li>
				    <li><a href="#">5</a></li>
				    <li>
				      <a href="#" aria-label="Next">
				        <span aria-hidden="true">next</span>
				      </a>
				    </li>
				  </ul>
				<div>showing 1-36 of 124</div>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<hr class="grayline">
		</div>
		<div class="col-xs-4">
			<div class="sale-slogan free">
				<span>
					<h2>FREE SHIPPING</h2>
					<p>
						Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
					</p>
				</span>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="sale-slogan garantee">
				<span>
					<h2>SATISFACTION 100% GUARANTEED</h2>
					<p>
						Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
					</p>
				</span>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="sale-slogan return">
				<span>
					<h2>30 DAY EASY RETURN</h2>
					<p>
						Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
					</p>
				</span>
			</div>
		</div>
		<div class="col-xs-12">
				<hr class="grayline">
			</div>
	</div>
</div>

<section id="tobemember">
	<div class="container">
		<div class="row">
			<div class="col-xs-7">
				<img src="images/tobemember.png" alt="tobemember" width="588" height="437">
			</div>
			<div class="col-xs-5">
				<div class="howto">
					<div>
						<h2>BECOME TO OUR PARTNER</h2>
						<ul class="memberoption">
							<li><a href="#">PARTNER PROGRAM</a></li>
							<li><a href="#">BUSINESS BENEFIT</a></li>
							<li><a href="#">Business Opportunities</a></li>
							<li><a href="#">REGIETER</a></li>
							<li><a href="#">ASK FOR MORE INFORMATION</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('inc_footer.php'); ?>
</body>
</html>