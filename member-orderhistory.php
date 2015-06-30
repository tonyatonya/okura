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
		<div class="col-xs-9 order-history">
		<h2 class="title-bar gold">
			<span class="icon icon-file-text2"></span>  ประวัติการสั่งซื้อสินค้า
		</h2>
		<div class="search-box">
			<h3>เลือกช่วงวันที่ต้องการเรียกดูรายการได้ที่นี่</h3>
			<table>
				<tr>
					<td><label>ตั้งแต่วันที่</label></td>
					<td><input type="date"></td>
					<td><label>ถึงวันที่</label></td>
					<td><input type="date"></td>
					<td><input type="submit" value="เรียกดู" class="greenbtn"></td>
				</tr>
			</table>
		</div>
		<table class="blacklight-tb">
			<tr>
				<th>รหัสอ้างอิง</th>
				<th>วันที่สั่งซื้อ</th>
				<th>จำนวน</th>
				<th>ยอดชำระ</th>
				<th>สถานะ</th>
				<th>วันที่ส่งสินค้า</th>
				<th>รหัสการส่ง</th>
				<th>เลขที่ใบเสร็จ</th>
			</tr>
			<?php for($i=0;$i<30;$i++){ ?>
			<tr>
				<td>A201510101705</td>
				<td>10/10/2015</td>
				<td>5  ชิ้น</td>
				<td>155 THB</td>
				<td>รอชำระเงิน</td>
				<td>09/10/2015</td>
				<td>A201510091200</td>
				<td>A201510091200</td>
			</tr>		
			<?php } ?>
		</table>
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
</div>
</section>
<?php include('inc_footer.php'); ?>
</body>
</html>