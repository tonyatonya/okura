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
	<img src="images/catproductsbanner.jpg" alt="catproductsbanner">
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
		<div class="col-xs-12 bredcrum">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Products Category Name</a></li>
				<li>Products Category Group</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2 class="page-title">PRODUCT CATEGORY GROUP NAME</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-3 left-col">
			<?php include('inc_bestseller.php'); ?>
			<?php include('inc_howto.php'); ?>
		</div>
		<div class="col-xs-9 right-col product-content">
			<div class="row">
				<div class="col-xs-5">
					<figure>
						<img src="images/sampleproduct.jpg" alt="sampleproduct">
					</figure>
				</div>
				<div class="col-xs-7">
					<table class="product-info">
						<tr>
							<td colspan="2" class="name">PRODUCT NAME</td>
						</tr>
						<tr>
							<td colspan="2" class="code">Code : 12345</td>
						</tr>
						<tr>
							<td class="normal">NORMAL PRICE</td>
							<td class="normal price">155</td>
						</tr>
						<tr>
							<td class="member">MEMBER PRICE</td>
							<td class="member price">145</td>
						</tr>
						<tr>
							<td class="tb-btn">
								<table width="170">
									<tr>
										<td><a href="#" class="number add">
									<img src="images/minus.png" alt="minus" width="45" height="45">
								</a></td>
										<td><input type="number" placeholder="0"></td>
										<td><a href="#" class="number minus">
									<img src="images/add.png" alt="add" width="45" height="45">
								</a></td>
									</tr>
								</table>
							</td>
							<td class="tb-btn order">
								<a href="#"><span class="icon icon-cart"> </span> Order</a>
							</td>
						</tr>
					</table>
				</div>
				<div class="col-xs-7 social"><a href="#"><span class="icon-facebook3"></span></a></div>
					<div class="clear"></div>
					<div class="col-xs-12 product-detail">
						<h3 class="title">PRODUCT DETAIL</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
			</div>
		</div>
	</div>
	<div class="row products-section">
		<div class="col-xs-12">
			<hr class="grayline">
		</div>
		<div class="col-xs-12"><h2 class="section-title">RELATED PRODUCTS</h2></div>
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