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
			<span class="icon icon-bullhorn"></span> ประกาศล่าสุดจากบริษัท
		</h2>
			<table class="lightpink-tb anounce-list">
			<?php for($i=0;$i<4;$i++){ ?>
			<tr>
				<td>
					<table>
						<tr>
							<td>
								<div class="date">
									<div class="day">10</div>
									<div class="month">MAY</div>
								</div>
							</td>
							<td colspan="3" class="anounce-title">
								<a href="#">ผลไม้ เพียวพิซซ่า สเตชัน แชมป์มอนสเตอร์นายแบบ ทอมโปรเจ็คท์สตรอเบอรี แฟ็กซ์</a>
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
		<h2 class="title-bar blue">
			<span class="icon icon-newspaper"></span> ข่าวสารล่าสุดจากบริษัท
		</h2>
		<div class="violetbox news-list">
			<div class="hilight">
				<table>
					<tr>
						<th colspan="2">ผลไม้เพียวพิซซ่าสเตชัน แชมป์มอนสเตอร์ นายแบบ ทอมโปรเจ็คท์ สตรอเบอรี แฟ็กซ์</th>
					</tr>
					<tr>
						<td>
							<figure>
								<img src="images/news-img.jpg">
							</figure>
						</td>
						<td>
							<a href="#">
							<p>
								ม้งเบนโตะ โกะวอล์คโพลล์ เดอะซิล เวอร์บาบูนบูติก ม็อบโก๊ะน็อก ดิกชันนารี แอปเปิลสุนทรีย์ไบเบิล ว้อยทาวน์โรแมนติก วิลล์เทรลเล่อร์ เซ็กซี่บริกร รากหญ้าคอลเล็ก ชั่น มยุราภิรมย์ซานตาคลอส ลอร์ด รวมมิตร เอ๋เทรลเล่อร์กษัตริยาธิราชคอมพ์ซินโดรม เนิร์สเซอรี่ คันธาระนายพรานฮาโลวีนเอาท์ ธุหร่ำ วันเวย์
							</p>
							</a>
						</td>
					</tr>
				</table>
				
			</div>
			<table class="allnews-list">
				<?php for($i=0;$i<9;$i++){ ?>
				<tr>
					<td>
						<figure>
							<img src="images/news-img.jpg">
						</figure>
					</td>
					<td>
						<a href="#">ผลไม้เพียวพิซซ่าสเตชัน แชมป์มอนสเตอร์ นายแบบ ทอมโปรเจ็คท์ สตรอเบอรี แฟ็กซ์</a>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
		<a href="#">
				<img src="images/morelistbtn.jpg" alt="morelistbtn" style="width:100%; height:auto;">
			</a>	
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