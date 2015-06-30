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
		    <legend>กรอกข้อมูลบัญชีผู้ใช้งาน</legend>
		</fieldset>
			<div class="col-xs-4" style="margin-left: auto;margin-right: auto; float: none;">
				<table class="tb-form">
					<tr>
						<td><label>ชื่อผู้ใช้งาน</label></td>
					</tr>
					<tr>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td><label>รหัสผ่าน</label></td>
					</tr>
					<tr>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td><label>กรุณากรอกรหัสผ่านอีกครั้ง</label></td>
					</tr>
					<tr>
						<td><input type="text"></td>
					</tr>
				</table>
			</div>
		<fieldset class="featured-header orange left">
	    <legend>กรอกข้อมูลส่วนตัว</legend>
		</fieldset>
		<div class="col-xs-8" style="margin-left: auto; margin-right: auto; float: none;">
			<table class="tb-form twocol">
				<tr>
					<td><label>ชื่อ</label></td>
					<td><label>นามสกุล</label></td>
				</tr>
				<tr>
					<td><input type="text"></td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td><label>วันเดือนปีเกิด</label></td>
					<td><label>เลขที่บัตรประจำตัวประชาชน</label></td>
				</tr>
				<tr>
					<td><input type="text"></td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td><label>โทรศํพท์</label></td>
					<td><label>อีเมล์</label></td>
				</tr>
				<tr>
					<td><input type="text"></td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td colspan="2"><label>ที่อยู่</label></td>
				</tr>
				<tr>
					<td colspan="2"><input type="text"></td>
				</tr>
				<tr>
					<td><label>จังหวัด</label></td>
					<td><label>อำเภอ</label></td>
				</tr>
				<tr>
					<td><input type="text"></td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td><label>ตำบล</label></td>
					<td><label>รหัสไปรษณีย์</label></td>
				</tr>
				<tr>
					<td><input type="text"></td>
					<td><input type="text"></td>
				</tr>
				<tr>
					<td colspan="2"><label>รายได้เฉลี่ยต่อปี</label></td>
				</tr>
				<tr>
					<td><input type="text"></td>
					<td><label> บาท</label></td>
				</tr>
				
			</table>
		</div>
				<fieldset class="featured-header orange left">
	    <legend>กรอกข้อมูลธนาคาร</legend>
		</fieldset>
		<div class="col-xs-8" style="margin-left: auto; margin-right: auto; float: none;">
			<table class="tb-form twocol">
				<tr>
					<td colspan="2"><label>ชื่อบัญชี</label></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="text">
					</td>
				</tr>
				<tr>
					<td><label>ธนาคาร</label></td>
					<td><label>สาขา</label></td>
				</tr>
				<tr>
					<td>
						<select>
							<option>กรุณาเลือกชื่อธนาคาร</option>
						</select>
					</td>
					<td>
						<input type="text">
					</td>
				</tr>
				<tr>
					<td><label>เลขที่บัญชี</label></td>
					<td><label>Swift Code / IBAN</label></td>
				</tr>
				<tr>
					<td>
						<input type="text">
					</td>
					<td>
						<input type="text">
					</td>
				</tr>
								
			</table>
		</div>
		<hr>
		<table class="tb-form">
			<tr>
				<td class="btn-holder">
					<input type="submit" value="ยกเลิก"> <input type="submit" placeholder="ลงทะเบียน">
				</td>
			</tr>
		</table>
	</div>
</div>
</section>
<?php include('inc_footer.php'); ?>
</body>
</html>