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
<div class="container" style="padding-bottom: 100px;">
	<div class="col-xs-12 register">
		<h2>ลืมรหัสผ่าน</h2>
		<fieldset class="featured-header orange left">
		    <legend>กรอกข้อมูลการสมัครสมาชิก</legend>
		</fieldset>
			<p style="margin-top: 30px; margin-bottom: 30px; color: white;
					font-size: 22px; text-align: center;">
				กรุณากรอกข้อมูลที่ท่านใช้ในการลงทะเบียนเพื่อขอรับ Password
			</p>
			<div class="col-xs-4" style="margin-left: auto;margin-right: auto; float: none;">
				<table class="tb-form">
					<tr>
						<td><label>ชื่อผู้ใช้งาน</label></td>
					</tr>
					<tr>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td><label>อีเมล์ที่ใช้ลงทะเบียน</label></td>
					</tr>
					<tr>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td class="btn-holder" style="padding: 10px;">
							<input type="submit" value="ยกเลิก"> <input type="submit" placeholder="ลงทะเบียน">
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