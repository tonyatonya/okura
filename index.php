<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
	<title>OKURA</title>
	<?php 
		$pagename = 'home';
		include('inc_header.php');
	?>
</head>
<body>
<?php include('inc_top.php'); ?>
<section id="mainbanner">
	<?php include('inc_mainmenu.php'); ?>
	<ul class="homebanner">
		<li><a href="#"><img src="images/homebanner.jpg" alt="homebanner"></a></li>
		<li><a href="#"><img src="images/homebanner.jpg" alt="homebanner"></a></li>
		<li><a href="#"><img src="images/homebanner.jpg" alt="homebanner"></a></li>
	</ul>
	<script type="text/javascript">
		$(document).ready(function(){
			var slider = $('.homebanner').bxSlider({
			            mode: 'fade', //'horizontal','fade'
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
<section class="products-section">
	<div class="container">
		<div class="row">
			<div class="col-xs-12"><h2 class="section-title">FEATURED PRODUCTS</h2></div>
			<?php for($i=0;$i<4;$i++){ ?>
			<div class="col-xs-3">
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
			<div class="col-xs-12 viewall-holder">
				<a href="products.php" class="viewall">View All <img src="images/morearrow.svg"></a>
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
		</div>
	</div>
</section>
<section id="news">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="section-title">NEWS & ACTIVITIES</h2>
			</div>
			<div class="col-xs-6 hot-news">
				<figure class="news-img">
					<img src="images/samplenewsimg.jpg" alt="samplenewsimg" width="551" height="367">
				</figure>
				<div class="detail">
					<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </h3>
					<div class="date">20 August 2015</div>
					<a href="#" class="viewmore">VIEW MORE</a>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="other-news">
					<?php for($i=0;$i<2;$i++){ ?>
						<div class="news-child">
							<figure class="col-xs-4">
								<img src="images/samplenewsimg.jpg" alt="samplenewsimg">
							</figure>
							<div class="detail col-xs-8">
								<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </h3>
								<div class="date">20 August 2015</div>
								<a href="#" class="viewmore">VIEW MORE</a>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="news-all">
					<a href="#" class="viewall">View All</a>
				</div>
			</div>
		</div>
	</div>
</section>
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
<section id="memberarticle">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="section-title">ARTICLE FROM MEMBER</h2>
			</div>
			<?php for($i=0;$i<4;$i++){ ?>
				<div class="col-xs-3 article-child">
					<a href="#">
						<figure>
							<img src="images/samplenewsimg.jpg" alt="samplenewsimg">
						</figure>
						<div class="detail">
							<h3>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
							</h3>
						</div>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<?php include('inc_footer.php'); ?>
</body>
</html>