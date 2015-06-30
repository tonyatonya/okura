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
			<?php include("inc_leftside.php");?>
		</div>
		<div class="col-xs-6 blog" id="mid-col">
			<h2 class="title-bar lightpink">
			<span class="icon icon-pencil"></span> บล๊อคที่มีคนอ่านมากที่สุด
		</h2>
			<table class="lightpink-tb blog-list">
			<?php for($i=0;$i<7;$i++){ ?>
			<tr>
				<td>
					<table>
						<tr>
							<td colspan="3" class="blog-title">
								<a href="#">ผลไม้ เพียวพิซซ่า สเตชัน แชมป์มอนสเตอร์นายแบบ ทอมโปรเจ็คท์สตรอเบอรี แฟ็กซ์</a>
							</td>
						</tr>
						<tr>
							<td class="user">
								<figure>
									<img src="images/avartar.png" alt="avartar">
								</figure>
								MEMBERNAME MEMBER LASTNAME
							</td>
							<td class="stat">
								<span class="icon icon-eye"></span> 999 ครั้ง
							</td>
							<td class="stat">
								<span class="icon icon-bubbles"></span> 30 ความคิดเห็น
							</td>
						</tr>
					</table>
				</td>
			</tr>		
			<?php } ?>
			<tr>
				<td style="padding: 0; padding-top: 15px;">
					
				</td>
			</tr>
		</table>
			<h2 class="title-bar gold">
			<span class="icon icon-pencil"></span> บล๊อคล่าสุด
		</h2>
			<table class="blacklight-tb blog-list">
			<?php for($i=0;$i<12;$i++){ ?>
			<tr>
				<td>
					<table>
						<tr>
							<td colspan="3" class="blog-title">
								<a href="#">ผลไม้ เพียวพิซซ่า สเตชัน แชมป์มอนสเตอร์นายแบบ ทอมโปรเจ็คท์สตรอเบอรี แฟ็กซ์</a>
							</td>
						</tr>
						<tr>
							<td class="user">
								<figure>
									<img src="images/avartar.png" alt="avartar">
								</figure>
								MEMBERNAME MEMBER LASTNAME
							</td>
							<td class="stat">
								<span class="icon icon-eye"></span> 999 ครั้ง
							</td>
							<td class="stat">
								<span class="icon icon-bubbles"></span> 30 ความคิดเห็น
							</td>
						</tr>
					</table>
				</td>
			</tr>		
			<?php } ?>
			<tr>
				<td style="padding: 0; padding-top: 15px;">
					<a href="#">
						<img src="images/morelistbtn.jpg" alt="morelistbtn" width="554" height="60">
					</a>
				</td>
			</tr>
		</table>
		</div>
		<div class="col-xs-3">
			<?php include("inc_rightside.php"); ?>
		</div>
	</div>
</div>
</section>
<?php include('inc_footer.php'); ?>
</body>
</html>