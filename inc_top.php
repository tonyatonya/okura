<section id="topbar">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<ul>
					<li>
						<a href="#">PRIVACY POLICIES</a>
					</li>
					<li>
						<a href="#">CONTACT US</a>
					</li>
					<li>
						 <a href="#" class="signinbtn"><span class="icon icon-user"> </span>SIGN IN</a>
					</li>
					<!-- display after signin complete -->
					<li style="display: none;">
						 <a href="#" class="memberbtn"><span class="icon icon-user"> </span>Member Mame</a>
					</li>
					<!----------------------------------->
					<li class="lang">
						<a class="th" href="#">TH</a>
						<a class="en" href="#" style="display: none;">EN</a>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
</section>
<div class="overlay signin">
	<div class="box-body">
		<div class="gold-box">
		<h2>เข้าสู่ระบบ</h2>
		<table>
			<tr>
				<td><label>Username</label></td>
			</tr>
			<tr>
				<td><input type="text"></td>
			</tr>
			<tr>
				<td><label>Password</label></td>
			</tr>
			<tr>
				<td><input type="password"></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<button class="greenbtn sender-form">เข้าสู่ระบบ</button>
					<button class="greenbtn sender-form">ยกเลิก</button>
					<br>
					<a href="member-lostpassword.php" class="lost-password">ลืมรหัสผ่าน</ฟ>
				</td>
			</tr>
		</table>

	</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("a.signinbtn").click(function(e){
			e.preventDefault();
			$(".overlay.signin").addClass("active");
		})
		$(".sender-form").click(function(){
			$(".overlay").removeClass("active")
		})
	})
</script>
