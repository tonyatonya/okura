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
	<div class="col-xs-3">
		<aside id="left-side">
			<div class="side-menu">
				<ul>
					<li><a href="#"><span class="icon-share2"></span> เข้าร่วมเป็นพันธมิตร</a></li>
					<li><a href="#"><span class="icon-users"></span> ตัวอย่างพันธมิตร</a></li>
					<li><a href="#"><span class="icon-pie-chart"></span> หุ้นส่วนธุรกิจ</a></li>
					<li><a href="#"><span class="icon-lock"></span> เงื่อนไขและข้อตกลง</a></li>
				</ul>
			</div>
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
	<div class="col-xs-9 register">
		<h2>ลงทะเบียน</h2>
		<fieldset class="featured-header orange left">
		    <legend>เลือกวิธีการลงทะเบียน</legend>
		</fieldset>
		<div class="condition-box">
			<table>
				<tr>
					<td>
						<p>
							ลงทะเบียนโดยการกรอกข้อมูลเพื่อลงทะเบียน<br>
กรุณากรอกชื่อผู้ใช้งาน เพื่อตรวจสอบในระบบ
						</p>
						<div class="clear" style="height: 30px;"></div>
						<input type="text" ><br><br>
						<input type="submit" value="ตรวจสอบ" class="greenbtn">
					</td>
					<td>
						<p>ลงทะเบียนผ่านบัญชี Facebook ของท่านเอง</p>
						<div class="clear" style="height: 55px;"></div>
						<a href="#">
							<img src="images/fb-registor.png" alt="fb-registor" width="300" height="40">
						</a>
						
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</section>
<?php include('inc_footer.php'); ?>
</body>
</html>