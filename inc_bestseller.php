<div class="bestseller">
	<h2 class="section-title">BEST SELLER</h2>
	<?php for($i=1;$i<=10;$i++){ ?>
		<div class="bestseller-child">
			<div class="number">
				<span>
				<?php 
					if($i < 10){
						echo('0'.$i);
					}else{
						echo($i);
					}
				?>
				</span>
			</div>
			<table>
				<tr>
					<td>
						<figure>
							<a href="products-detail.php"><img src="images/sampleproduct.jpg" alt="sampleproduct"></a>
						</figure>
					</td>
					<td>
						<ul>
							<li class="name"><a href="products-detail.php">Product Name</a></li>
							<li class="price">155 Baht</li>
							<li><a href="#"><img src="images/cart.png" alt="cart" width="20" height="17"></a></li>
						</ul>
						
					</td>
				</tr>
			</table>
		</div>
	<?php } ?>
</div>