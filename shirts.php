<?php include("inc/products.php"); ?><?php
$pageTitle = "Kim's Full Catalog of Shirts";
$section = "shirts"; 
include('inc/header.php'); ?>

		<div class="section shirts page">

			<div class="wrapper">

				<h1>Kim&rsquo;s Full Catalog of Shirts</h1>

				<ul class="products">
					<?php foreach($products as $productID => $product){
                        if($productID < 200){
                            echo get_list_view_html($productID,$product);
                        };
					}; ?>
				</ul>

			</div>

		</div>

<?php include('inc/footer.php') ?>