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
			<?php include("inc_leftsideonly.php");?>
		</div>
		<div class="col-xs-9 blog-show" id="mid-col">
			<fieldset class="featured-header left">
		    	<legend><span class="icon icon-bubbles"></span>เขียนบทความนี้</legend>
			</fieldset>
			<section class="main">
				<table class="writeblog">
					<tr>
						<td><label>ชื่อบทความ</label></td>
					</tr>
					<tr>
						<td>
							<textarea></textarea>
						</td>
					</tr>
				</table>
				<hr>
				<table class="writeblog">
					<tr>
						<td>
							<label>เนื้อหา</label>
						</td>
					</tr>
					<tr>
						<td style="min-height: 300px;">
							<!-- texteditor here -->
						</td>
					</tr>
				</table>
				<hr>
				<table class="writeblog">
					<tr>
						<td><label>ภาพปก</label></td>
					</tr>
					<tr>
						<td>
							<input type="file">
						</td>
					</tr>
				</table>
				<hr>
				<table class="writeblog">
					<tr>
						<td><label>ภาพแกลลอรี่</label></td>
					</tr>
					<tr>
						<td>
							<input type="file">
						</td>
					</tr>
				</table>
				<hr>
				<table class="writeblog">
					<tr>
						<td>
							<input type="radio"> <label>แสดงสู่สาธารณะ</label> <input type="radio"> <label>ซ่อนบทความ</label>
						</td>
						<td style="text-align: right;">
							<button class="greenbtn">ยกเลิก</button> 
							<button class="greenbtn">บันทึก</button>
						</td>
					</tr>
				</table>
			</section>
			
		</div>
		
	</div>
</div>
</section>
<?php include('inc_footer.php'); ?>

</body>
</html>