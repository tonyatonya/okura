<div class="side-menu">
	<ul>
		<li><a href="member-dashboard.php"><span class="icon-meter"></span>แดชบอร์ด</a></li>
		<li class="mainmenu">
			<a href="#"><span class="icon-pencil"></span>เว็บบล๊อค</a>
			<div class="sub-menu">
				<ul>
					<li><a href="member-blog.php">บล็อกทั้งหมด</a></li>
					<li><a href="member-blog-write.php">เขียนบล็อก</a></li>
				</ul>
			</div>
		</li>
		<li><a href="member-team.php"><span class="icon-users"></span>กลุ่มงาน</a></li>
		<li><a href="#"><span class="icon-gift"></span>คอมมิชชั่น</a></li>
		<li><a href="member-wallet.php"><span class="icon-credit-card"></span>จัดการ e-wallet</a></li>
		<li><a href="member-tradeboard.php"><span class="icon-stats-dots"></span>จัดการข้อมูลหุ้น</a></li>
		<li><a href="products-checkout.php"><span class="icon-cart"></span>ตระกร้าสินค้า</a></li>
		<li><a href="member-orderhistory.php"><span class="icon-file-text2"></span>ประวัติการสั่งซื้อสินค้า</a></li>
		<li><a href="member-promotion.php"><span class="icon-price-tag"></span>โปรโมชั่น</a></li>
		<li><a href="member-register-form.php"><span class="icon-cog"></span>แก้ไขข้อมูลส่วนตัว</a></li>
	</ul>
</div>
<script type="text/javascript">
	$(function(){
		$(".mainmenu > a").click(function(e){
			e.preventDefault();
			var parentM = $(this).parent(); 
			var target = $(this).parent().find(".sub-menu");
			if(parentM.hasClass("active")== false){
				$(".side-menu .mainmenu.active").find(".sub-menu").slideUp();
				$(".side-menu .mainmenu.active").removeClass("active");
				parentM.addClass("active");
				target.slideDown();	
			}else{
				parentM.removeClass("active");
				target.slideUp();
			}
		})
	})
</script>