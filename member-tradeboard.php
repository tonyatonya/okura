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
		<div class="col-xs-6" id="mid-col">
			<div class="menutab">
				<ul>
					<li class="active"><a href="#">PREDERRED EXCHANGER</a></li>
					<li><a href="#">ORKURAS EXCHANGER</a></li>
				</ul>
			</div>
			<div class="content-tab">
				<div class="tab-child">
					<table class="whitelight-tb preferbalance">
						<tr>
							<th colspan="2">ORKURA PREFERRRED CONVERTIBLE</th>
							<th>BALANCE</th>
						</tr>
						<tr>
							<td><div class="colorbar user"></div> User</td>
							<td>USD 1-349 (33-11,517 THB)</td>
							<td>499,888,000</td>
						</tr>
						<tr>
							<td><div class="colorbar origin"></div>Origin</td>
							<td>USD 350 (11,550 THB)</td>
							<td>25,000</td>
						</tr>
						<tr>
							<td><div class="colorbar standard"></div>Standard</td>
							<td>USD 1,000 (33,000 THB)</td>
							<td>8,000</td>
						</tr>
						<tr>
							<td><div class="colorbar platinum"></div> Platinum</td>
							<td>USD 2,500 (82,000 THB)</td>
							<td>1,000</td>
						</tr>
						<tr>
							<td><div class="colorbar premier"></div> The Premier</td>
							<td>USD 5,000 (165,000 THB)</td>
							<td>300</td>
						</tr>
						<tr>
							<td><div class="colorbar signature"></div> Signature</td>
							<td>USD 10,000 (330,000 THB)</td>
							<td>50</td>
						</tr>
						<tr>
							<td><div class="colorbar prime"></div> Prime Dealer</td>
							<td>USD 50,000 (1,650,000 THB)</td>
							<td>3</td>
						</tr>
						<tr>
							<td><div class="colorbar angle"></div> Angle Venture</td>
							<td>USD 50,000 (1,650,000 THB)</td>
							<td>3</td>
						</tr>
					</table>
					<table class="greenlight-tb">
						<tr>
							<th>TRADING TERMINAL</th>
							<th>ความต้องการซื้อ</th>
							<th>ความต้องการขาย</th>
						</tr>
						<tr>
							<td>Orkuras</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>User</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Origin</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Standard</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Platinum</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Premier</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Signature</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Angle Venture</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Bluedamos Villa</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Pool Villa</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Coffee Street</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Coffee & Drinks</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Coffee Centre</td>
							<td>0</td>
							<td>0</td>
						</tr>
						<tr>
							<td>Coffee Massage & Spa</td>
							<td>0</td>
							<td>0</td>
						</tr>
						
					</table>
					<table class="blacklight-tb tradeanoucer">
						<tr>
							<th>ข้อมูลผู้ขาย</th>
							<th>ราคาเสนอขาย</th>
							<th>ติดต่อเจ้าหน้าที่</th>
						</tr>
						<?php for($i=0;$i<10;$i++){?>
						<tr>
							<td>Seller Name</td>
							<td>1.5</td>
							<td><a href="#" class="contact-staff">Staff Name</a></td>
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
				<div class="tab-child">
					<fieldset class="featured-header left" style="margin-top: 15px;">
						<legend>ประกาศขายที่นี่</legend>
					</fieldset>
					<div class="anouce-box">
						<table>
							<tr>
								<td><label>จำนวนหุ้น</label></td>
								<td><label>ราคาต่อหน่วย</label></td>
							</tr>
							<tr>
								<td><input type="text"> <label>หน่วย</label></td>
								<td><input type="text"> <label>USD</label></td>
							</tr>
							<tr>
								<td colspan="2" style="text-align: center;">
									<button class="greenbtn">ยกเลิก</button>
									<button class="greenbtn">ประกาศขาย</button>
								</td>
							</tr>
						</table>
					</div>
					<fieldset class="featured-header left">
						<legend>ประกาศขายทั้งหมด</legend>
					</fieldset>
					<div class="stock-search">
						<table>
							<tr>
								<td>
									<input type="text" placeholder="SEARCH">
									<span class="icon icon-search"></span>
								</td>
								<td>
									<button class="greenbtn">ค้นหาประกาศ</button>
								</td>
							</tr>
						</table>
					</div>
					<table class="blacklight-tb stockanoucer">
						<tr>
							<th>ข้อมูลผู้ขาย</th>
							<th>จำนวน</th>
							<th>ราคา/หน่วย</th>
							<th>วันที่ประกาศ</th>
							<th></th>
						</tr>
						<?php for($i=0;$i<10;$i++){?>
						<tr>
							<td>Seller Name</td>
							<td>30</td>
							<td class="price">1.5</td>
							<td>10/10/2015</td>
							<td><a href="#" class="contact-seller"><img src="images/infobtn.png" alt="infobtn" width="20" height="20"></a></td>
						</tr>
						<?php } ?>
					</table>	
				</div>
			</div>
		</div>
		<div class="col-xs-3">
			<div class="toprate" style="margin-top: 30px;">
				<h3>OKURAS DAILY QUOTES</h3>
				<div class="rate">1.00</div>
			</div>
			<div class="toprate">
				<h3>CHANGE</h3>
				<div class="rate">+0.12</div>
			</div>
			<?php include("inc_rightside.php"); ?>
		</div>
	</div>
</div>
</section>
<?php include('inc_footer.php'); ?>
<div class="overlay contact-staff">
	<div class="box-body">
		<div class="gold-box">
		<h2>ติดต่อเจ้าหน้าที่เพื่อแจ้งความต้องการซื้อ</h2>
		<table>
			<tr>
				<td><label>รายละเอียดผู้ขาย</label></td>
				<td><label>ราคา(USD)</label></td>
			</tr>
			<tr>
				<td><input type="text"></td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td><label>เจ้าหน้าที่ผู้ติดต่อ</label></td>
				<td><label>Trading Terminal</label></td>
			</tr>
			<tr>
				<td><input type="text"></td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td><label>จำนวนที่ต้องการซื้อ (โปรดระบุ)</label></td>
				<td><label>ยอดชำระ (USD)</label></td>
			</tr>
			<tr>
				<td><input type="text"></td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<button class="greenbtn sender-form">ยกเลิก</button>
					<button class="greenbtn sender-form">ส่งคำสั่งซื้อ</button>
				</td>
			</tr>
		</table>

	</div>
	</div>
</div>
<div class="overlay contact-seller">
	<div class="box-body">
		<div class="gold-box">
		<h2>ส่งข้อความหาผู้ขาย</h2>
		<table>
			<tr>
				<td><label>รายละเอียดผู้ขาย</label></td>
				<td><label>ราคา/หน่วย(USD)</label></td>
			</tr>
			<tr>
				<td><input type="text"></td>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td><label>จำนวนหน่วย</label></td>
				<td></td>
			</tr>
			<tr>
				<td><input type="text"></td>
				<td></td>
			</tr>
			<tr>
				<td><label>ชื่อผู้ติดต่อ</label></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2"><input type="text"></td>
			</tr>
			<tr>
				<td><label>ข้อความ</label></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="2">
					<textarea></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<button class="greenbtn sender-form">ยกเลิก</button>
					<button class="greenbtn sender-form">ส่งคำสั่งซื้อ</button>
				</td>
			</tr>
		</table>

	</div>
	</div>
</div>
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
		
		$("a.contact-staff").click(function(e){
			e.preventDefault();
			$(".overlay.contact-staff").addClass("active");
		})
		$("a.contact-seller").click(function(e){
			console.log("seller");
			e.preventDefault();
			$(".overlay.contact-seller").addClass("active");
		})
		
		$(".sender-form").click(function(){
			$(".overlay").removeClass("active")
		})
	})
</script>
</body>
</html>