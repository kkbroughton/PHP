<?php 
$pageTitle = "Unique T-shirts designed by a frog";
$section = "home";
include('inc/header.php'); ?>
		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/southpark_kb.png" alt="Kim says:">
				<div class="button">
					<?php if($section == "shirts" || $section == "home"){ echo "on"; } ?>"><a href="shirts.php"><h2>Hey, I&rsquo;m Kim!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Kim&rsquo;s Latest Products</h2>
				<?php include("inc/products.php"); ?>
				<ul class="products">
					<?php
						$totalProducts = count($products);
						$position = 0;
						$list_view_html = "";
						foreach($products as $productID => $product){
							$position = $position+ 1;
							if($totalProducts - $position < 4){
								$list_view_html = get_list_view_html($productID, $product) . $list_view_html;
							}
						}
						echo $list_view_html;
					?>								
				</ul>

			</div>

		</div>

<?php include('inc/footer.php') ?>