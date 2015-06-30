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
<div class="container">
	
	
	<div class="row">
		<div class="col-xs-3 left-col">
			<aside>
				<ul>
					<li><a href="#">เกี่ยวกับเรา</a></li>
					<li><a href="#">เกี่ยวกับเรา</a></li>
				</ul>
			</aside>
		</div>
		<div class="col-xs-9 right-col products-section">
			<h2 class="section-title">เกี่ยวกับเรา</h2>
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