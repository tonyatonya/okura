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
		<h2>ตัวอย่างพันธมิตร</h2>
		
		<p class="paragraph">
				 สำหรับพันธมิตรจะมีระบบจัดการดำเนินการส่วนตัวท่านเองได้ พร้อมรับข่าวสารที่น่าสนใจทุกวันท่านสามารถติดต่อสอบถามข้อมูลพร้อมรับคำปรึกษา ระบบรองรับการทำงานได้ตลอด 24 ชั่วโมง 

			</p>
		
		<fieldset class="featured-header orange left">
		    <legend>เหตุผลที่ท่านต้องได้รับคำเชิญ</legend>
		</fieldset>
		<p class="paragraph">
			เพื่อปกป้องสิทธิประโยชน์และความสัมพันธ์ที่ดีระหว่างทีมงาน Okura ส่งเสริมให้สมาชิก ทุกท่านที่ต้องการเป็นครอบครัวกับเราควรได้รับการเชื้อเชิญจากคนรู้จัก เพื่อนสนิท เพื่อนทางธุรกิจ โดยสายสัมพันธ์จะทำให้เพื่อนในเครือข่ายของท่านเข้าใจในระบบธุรกิจของ Okura มากขึ้น โดยส่งผ่านคำเชิญทางอีเมลล์ เพียงแค่เพื่อน ของท่านคลิกที่ link ที่ท่านส่งไปและสมัครเพื่อนของท่านจะอยู่ภายใต้การแนะนของท่านทันที โปรดอ่านและตรวจสอบ ให้แน่ใจว่าท่านยอมรับข้อตกลงพันธมิตรกับ Okura ก่อนจะส่งแบบฟอร์มลงทะเบียนนี้ ใบสมัครทั้งหมดจะต้องผ่านกระบวนการตรวจสอบก่อนจึงจะเข้าสู่ศูนย์พันธมิตร
		</p>
		<fieldset class="featured-header orange left">
		    <legend>ท่านจะได้รับสิทธิประโยชน์อะไรในฐานะหุ้นส่วนธุรกิจกับโปรแกรม Okura Network</legend>
		</fieldset>
		<p class="paragraph">เมื่อท่านมียอดสั่งซื้อสินค้าผ่านทางโปรแกรมพาร์ทเนอร์รีวอร์ดของบริษัทโดยมียอดคะแนน สะสมส่วนตัวเกิน 10 ดอลล่าร์สหรัฐรีวอร์ดคะแนนขึ้นไปในเดือนนั้นๆ </p>
		<fieldset class="featured-header orange left">
		    <legend>ท่านสามารถเข้าร่วมโครงการพันมิตรอื่นๆ ได้หรือไม่</legend>
		</fieldset>
		<p class="paragraph">
			ในสัญญาของเราไม่ได้ระบุกรรมสิทธิ์แต่เพียงผู้เดียว เป็นธรรมดาที่เราย่อมต้องการให้หุ้นส่วนธุรกิจของเราใช้บริการของเราแต่เพียงผู้เดียว แต่เราก็เคารพสิทธิ ของท่านในการที่นำเสนอโดย โครงการพันธมิตรอื่นๆ อย่างไรก็ตาม บริษัทขอให้หุ้นส่วนเปิดเผยโครงการพันธมิตรอื่นๆที่หุ้นส่วนใช้อยู่ เพื่อที่เราจะสามารถ ปรับปรุงบริการของเราเพื่อก้าวขึ้นเป็นหุ้นส่วนแต่เพียงผู้เดียวของโครงการพันธมิตรที่ได้รับเลือก
		</p>
		<fieldset class="featured-header orange left">
		    <legend>ข้อตกลงสำหรับพันธมิตรธุรกิจ</legend>
		</fieldset>
		<p class="paragraph">
			โปรดอ่านข้อตกลงนี้อย่างรอบคอบ ข้อตกลงนี้เป็นสัญญาที่ครอบคลุมการใช้บริการหรือซอฟต์แวร์ใดๆ ของ Orkuras.com  หรือบริการหรือซอฟต์แวร์อื่นๆ ของ ORKURA ที่แสดงหรือเชื่อมโยงกับข้อตกลงนี้ ("บริการ") โดยตรง เมื่อใช้หรือเข้าถึงบริการดังกล่าว ท่านต้องยืนยันว่าท่านยอมรับข้อกำหนดเหล่านี้ หากท่านไม่ยอมรับ เราขอห้ามมิให้ใช้บริการนี้
		</p>
		<fieldset class="featured-header orange left">
		    <legend>โปรแกรม Okura Network</legend>
		</fieldset>
		<p class="paragraph">
			เมื่อท่านมียอดสั่งซื้อสินค้าผ่านทางโปรแกรมพาร์ทเนอร์รีวอร์ดของบริษัทโดยมียอดคะแนนสะสมส่วนตัวเกิน 10 ดอลล่าร์สหรัฐรีวอร์ดคะแนนขึ้นไปในเดือนนั้นๆ ท่านสามารถตรวจสอบได้ทันทีผ่านระบบ  Okura ระบบบจะมีการแจ้งเมล์ถึงท่าน เมื่อมีการเคลื่อนไหว หรือท่านสามารถกำหนดการแจ้งเตือนต่างๆได้เอง ในระบบ RealTime
		</p>
		<fieldset class="featured-header orange left">
		    <legend>ข่าวสารและข้อมูลผ่านโซเชียล Okura</legend>
		</fieldset>
		<p class="paragraph">
			ท่านสามารถแชร์ประสบการณ์ผ่านระบบโซเชียล ใช้งานง่ายและแม่นยำ ตรวจสอบการออนไลน์ของสมาชิกทุกท่าน ข่าวสารการลงทุนอัพเดตสม่ำเสมอ
		</p>
	</div>
</div>
</section>
<?php include('inc_footer.php'); ?>
</body>
</html>