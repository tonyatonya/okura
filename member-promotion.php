<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
	<title>OKURA</title>
	<?php 
		$pagename = '';
		include('inc_header.php');
	?>
</head>
<body>
<?php include('inc_top.php'); ?>
<section id="catbanner">
	<?php include('inc_mainmenu.php'); ?>
	<img src="images/catproductsbanner.jpg" alt="catproductsbanner">
</section>
<section class="memberbg">
<div class="container">
	<?php include('inc_topprofile.php'); ?>
	<div class="row">
		<div class="col-xs-3">
		<aside id="left-side">
			<?php include('inc_membermenu.php'); ?>
			<?php for($i=0;$i<2;$i++){ ?>
			<div class="side-ads">
				<a href="#">
					<img src="images/agoda.jpg">
					<p>
						Agoda.com มีเครือข่าย พันธมิตรโรงแรม มากกว่า 600,000 แห่งทั่วโลกในการจอง โรงแรมราคา ถูกที่สุด และ โปรแกรมสะสมรีวอร์ด Okura เลือกเป็นส่วนหนึ่งของ พันธมิตรกับ Agoda  และ Booking.comซึ่งมีการจองห้องกว่า 1,000,000 ห้อง / คืน
					</p>
				</a>
			</div>
			<?php } ?>
			<?php for($i=0;$i<2;$i++){ ?>
			<div class="side-promotion">
				<a href="#">
					<img src="images/sidepromotionbanner.jpg">
				</a>
			</div>
			<?php } ?>
			<div class="side-review">
				<h2>รีวิวสินค้า</h2>
				<?php for($i=0;$i<2;$i++){ ?>
				<div class="review-box">
					<a href="#">
						<figure>
							<img src="images/reviewimg.jpg" alt="reviewimg">
						</figure>
						<p>
							ผลไม้ เพียวพิซซ่า สเตชัน แชมป์มอนสเตอร์ นายแบบ ทอมโปรเจ็คท์สตรอเบอรี แฟ็กซ์ โบ้ยฮองเฮาเมจิกแตงโม รีไซเคิลแรงใจไนน์ เทรด 
						</p>
					</a>
					<hr>
					<div class="foot-text">
					<span class="icon-eye"></span> 999 ครั้ง 
					<span class="icon-bubbles2"></span> 30 ความคิดเห็น
					</div>
				</div>
				<?php } ?>
			</div>
		</aside>
	</div>
		<div class="col-xs-9 promotion">
		<h2 class="title-bar darkpink">
			<span class="icon icon-price-tag"></span>  โปรโมชั่น
		</h2>
		<div class="row">
			<?php for($i=0;$i<9;$i++){ ?>
			<div class="col-xs-4">
				<div class="promotion-box">
					<figure>
						<img src="images/promotionbanner.jpg" alt="promotionbanner">
					</figure>
					<h3>ชื่อโปรโมชั่น</h3>
					<p>
						เบญจมบพิตรเปโซคอรัปชันเพลซ สเตริโอสไตรค์ เมจิกดยุค จูเนียร์โค้ก เซ็กซี่ ฟอยล์วานิลลาพาสเจอร์ไรส์ฮัลโลวีน แม่ค้า ออทิสติกนางแบบฮาลาลฮีโร่ วิลล์คาร์อาว์ แคมเปญ กระดี๊กระด๊าไฮเทคสเต็ป คีตปฏิภาณ ปาสเตอร์
					</p>
					<a href="#" class="greenbtn">อ่านต่อ</a>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	</div>
</div>
</section>
<?php include('inc_footer.php'); ?>
</body>
</html>