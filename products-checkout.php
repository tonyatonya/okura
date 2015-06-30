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
		<div class="col-xs-12 bredcrum" style="margin-top:30px;">
			<ul>
				<li><a href="#">Home</a></li>
				<li>Check out</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<h2 class="page-title">CHECK OUT</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-3 left-col">
			
			<?php include('inc_howto.php'); ?>
			<br>
			<img src="images/checkout.png" alt="checkout" style="width:100%; height:auto;">
		</div>
		<div class="col-xs-9 right-col">
			<h2 class="section-title">ORDER LIST</h2>
			
			<table class="checkout-tb">
				<tr>
					<th class="product-img">สินค้า</th>
					<th class="product-name">ชื่อ</th>
					<th class="product-qty">จำนวน</th>
					<th class="product-price">ราคา</th>
					<th class="product-point">แต้มออคูรัส</th>
					<th class="product-action">ลบ</th>
				</tr>
				<?php for($i=0;$i<5;$i++){ ?>
				<tr>
					<td class="child-img">
						<figure>
							<img src="images/sampleproduct.jpg">
						</figure>
					</td>
					<td class="child-name">Product Name</td>
					<td class="child-qty">
						<button class="minus">
							<img src="images/minus.png" alt="minus" width="35" height="35">
						</button>
						<input type="text" placeholder="0">
						<button class="plus">
							<img src="images/plusbtn.png" alt="plusbtn" width="35" height="35">
						</button>
					</td>
					<td class="child-price">155 THB</td>
					<td class="child-point">100</td>
					<td class="child-action"><a href="#"><img src="images/removebtn.png" alt="removebtn" width="25" height="25"></a></td>
				</tr>
				<?php } ?>
			</table>
			
			<h2 class="section-title">TOTAL PAYMENT</h2>
			<hr class="grayline">
			<table style="width: 45%; margin-right: 5%;" class="point">
				<tr>
					<td>จำนวนแต้มสะสม <span>500</span> คะแนน</td>
				</tr>
			</table>
			<table class="checkout-sum">
				<tr>
					<td>จำนวนเงินรวม</td>
					<td class="num">775</td>
					<td>บาท</td>
				</tr>
				<tr>
					<td></td>
					<td class="num">0</td>
					<td>ออคูรัส</td>
				</tr>
				<tr>
					<td>ค่าจัดส่ง</td>
					<td class="num">200</td>
					<td>บาท</td>
				</tr>
				<tr>
					<td>จำนวนเงินสุทธิ</td>
					<td class="num">975</td>
					<td>บาท</td>
				</tr>
				<tr>
					<td></td>
					<td class="num">0</td>
					<td>ออคูรัส</td>
				</tr>
				
			</table>
			<div class="clear"></div>
			<button style="float: right;border:none;"><img src="images/checkoutbtn.png" alt="checkoutbtn" width="177" height="45"></button>
			<div class="clear" style="height: 30px;"></div>
		</div>
	</div>
	
</div>

<?php include('inc_footer.php'); ?>
</body>
</html>