<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
	<title>OKURA</title>
	<?php 
		$pagename = '';
		include('inc_header.php');
	?>
	<link rel="stylesheet" href="css/colorbox.css"/>
	<link rel="stylesheet" href="css/jquery.modal.css"/>
	<link rel="stylesheet" href="css/jquery.modal.theme-atlant.css"/>
	<link rel="stylesheet" href="css/jquery.modal.theme-xenon.css"/>
	<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="js/jquery.modal.min.js"></script>
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
		<div class="col-xs-9" id="mid-col">
			<h2 class="title-bar darkred">
				<span class="icon icon-users"></span> กลุ่มงาน
			</h2>
			<div class="clear" style="height: 30px;"></div>
			<div class="menutab">
				<ul>
					<li class="active"><a href="#">ACTIVE VENTURE</a></li>
					<li><a href="#">ACTIVE GENERATION</a></li>
				</ul>
				<table class="idsearch">
					<tr>
						<td><input type="text" placeholder="FIND ID HERE"></td>
						<td><button class="greenbtn">ค้นหา</button></td>
					</tr>
				</table>
			</div>
			<div class="content-tab">
				<div class="tab-child">
					<div class="main-gen venture">
						<div class="gen-row first">
							<div class="gen-grid">
								<div class="verline verline-top left"></div>
								<div class="verline verline-top right"></div>
								<div class="gen-child">
									<div class="avartar user" style="background-image:url(images/avartar.png) "><a href="#"></a></div>
									<ul>
									<li>01100010100</li>
									<li>ชื่อสมาชิก นามสกุลสมาชิก</li>
								</ul>
								</div>
								<div class="verline verline-bottom"></div>
							</div>
						</div>
						<div class="gen-row last">
							<?php for($i=0;$i<5;$i++){ ?>
							<div class="gen-grid">
								<div class="verline verline-top left"></div>
								<div class="verline verline-top right"></div>
								<div class="gen-child">
									<div class="avartar origin" style="background-image:url(images/avartar.png) "><a href="#"></a></div>
										<ul>
									<li>01100010100</li>
									<li>ชื่อสมาชิก นามสกุลสมาชิก</li>
									</ul>
								</div>
								<div class="verline verline-bottom"></div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="tab-child">
					<div class="main-gen generration">
						
						<div class="gen-row first">
							<div class="gen-grid">
								<div class="verline verline-top left"></div>
								<div class="verline verline-top right"></div>
								<div class="gen-child">
									<div class="avartar user" style="background-image:url(images/avartar.png) "><a href="#"></a></div>
									<ul>
									<li>01100010100</li>
									<li>ชื่อสมาชิก นามสกุลสมาชิก</li>
								</ul>
								</div>
								<div class="verline verline-bottom"></div>
							</div>
						</div>
						<div class="gen-row">
							<!-- left side -->
							<div class="gen-grid grid-left">
								<div class="verline verline-top left"></div>
								<div class="verline verline-top right"></div>
								<div class="gen-child">
									<div class="avartar user" style="background-image:url(images/avartar.png) "><a href="#"></a></div>
									<ul>
									<li>01100010100</li>
									<li>ชื่อสมาชิก นามสกุลสมาชิก</li>
								</ul>
								</div>
								<div class="verline verline-bottom"></div>
							</div>
							
							<!-- right-side-->
							<div class="gen-grid grid-right">
								<div class="verline verline-top left"></div>
								<div class="verline verline-top right"></div>
								<div class="gen-child">
									<div class="avartar user" style="background-image:url(images/avartar.png) "><a href="#"></a></div>
									<ul>
									<li>01100010100</li>
									<li>ชื่อสมาชิก นามสกุลสมาชิก</li>
								</ul>
								</div>
								<div class="verline verline-bottom"></div>
							</div>
							
						</div>
						<div class="gen-row last twocol">
							<div class="gen-grid grid-left">
								<div class="verline verline-top left"></div>
								<div class="verline verline-top right"></div>
								<div class="gen-child">
									<div class="avartar origin" style="background-image:url(images/avartar.png) "><a href="#"></a></div>
										<ul>
									<li>01100010100</li>
									<li>ชื่อสมาชิก นามสกุลสมาชิก</li>
									</ul>
								</div>
								<div class="verline verline-bottom"></div>
							</div>
							<div class="gen-grid grid-right">
								<div class="verline verline-top left"></div>
								<div class="verline verline-top right"></div>
								<div class="gen-child">
									<div class="avartar origin" style="background-image:url(images/avartar.png) "><a href="#"></a></div>
										<ul>
									<li>01100010100</li>
									<li>ชื่อสมาชิก นามสกุลสมาชิก</li>
									</ul>
								</div>
								<div class="verline verline-bottom"></div>
							</div>
						</div>
						<div class="gen-row last twocol">
							<div class="gen-grid grid-left">
								<div class="verline verline-top left"></div>
								<div class="verline verline-top right"></div>
								<div class="gen-child">
									<div class="avartar origin" style="background-image:url(images/avartar.png) "><a href="#"></a></div>
										<ul>
									<li>01100010100</li>
									<li>ชื่อสมาชิก นามสกุลสมาชิก</li>
									</ul>
								</div>
								<div class="verline verline-bottom"></div>
							</div>
							<div class="gen-grid grid-right">
								<div class="verline verline-top left"></div>
								<div class="verline verline-top right"></div>
								<div class="gen-child">
									<div class="avartar origin" style="background-image:url(images/avartar.png) "><a href="#"></a></div>
										<ul>
									<li>01100010100</li>
									<li>ชื่อสมาชิก นามสกุลสมาชิก</li>
									</ul>
								</div>
								<div class="verline verline-bottom"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<figure style="width: 100%;text-align: center;">
				<img src="images/colorchart.png" alt="colorchart" width="622" height="85">
			</figure>
			
		</div>
		
	</div>
</div>
</section>
<?php include('inc_footer.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$(".menutab ul li a").click(function(e){
			e.preventDefault();
			var parent = $(this).parent();
			var getIndex = $(this).parent().index();
			if(parent.hasClass("active")==false){
				$(".menutab").find("li.active").removeClass("active");
				parent.addClass("active");
				$(".content-tab .tab-child").each(function(){
				 	var getChildIndex = $(this).index();
				 	if(getChildIndex == getIndex){
					 	$(this).fadeIn().show();
				 	}else{
					 	$(this).hide();
				 	}
				})
			}
		})
		
		
		
		$(".venture .gen-row").each(function(){
			var childNum = $(this).find(".gen-grid").length;
			var rowW = 0;
			var i = 0;
			console.log("childNum = ",childNum);
			if(childNum > 5){
				var getW;
				for(i=0;i<=childNum-1;i++){
					var childW = $(this).find(".gen-grid").eq(i).width();
					rowW = rowW + childW
					console.log("realwidth = ",$(this).find(".gen-grid").eq(i).width(),"rowW = ",rowW ,"i = ",i);
				}
				$(".venture .gen-row").css({
					'width': rowW + childW
				})
			}
			
			var myDiv = $(".venture .gen-row");
			var frame = $(".main-gen.venture");
			var scrollto = frame.offset().left + (myDiv.width() / 2) - (childW * 4.9);
			frame.animate({ scrollLeft:  scrollto});
			})
			
	})
</script>


</body>
</html>