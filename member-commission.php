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
		<?php include("inc_leftsideonly.php");?>
	</div>
	<div class="col-xs-9 comm">
		<h2 class="title-bar gold">
			<span class="icon icon-file-text2"></span>  คอมมิชชั่น
		</h2>
		
		<table class="comm-tb-top blacklight-tb">
			<tr>
				<td>Weekly</td>
				<td>Monthly</td>
				<th rowspan="3">Total Commission Amont : 0.00</th>
			</tr>
			<tr>
				<td>Quartery</td>
				<td>Yearly</td>
			</tr>
		</table>
		<div class="project-tb-wrapper">
			<!-- table header-->
			<div class="project-tb">
				<table class="comm-tb-body blacklight-tb">
					<tr>
						<th class="title">Project Phase</th>
						<th class="date">Starting</th>
						<th class="date">Ending</th>
					</tr>
				</table>
			</div>
			<div class="project-tb">
				<table class="comm-tb-body blacklight-tb">
					<tr>
						<th class="title">Project Phase</th>
						<th class="date">Starting</th>
						<th class="date">Ending</th>
					</tr>
				</table>
			</div>
			<!-- end table header -->
			<?php for($i=0;$i<10;$i++){ ?>
			<div class="project-tb">
				<table class="comm-tb-body blacklight-tb">
					<tr>
						<td class="title">Project Name</td>
						<td class="date">10/10/2015</td>
						<td class="date">10/10/2015</td>
					</tr>
				</table>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
</section>
<?php include('inc_footer.php'); ?>
</body>
</html>