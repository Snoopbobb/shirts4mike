<?php
require_once("inc/config.php");
include("inc/products.php"); 
$recent = get_products_recent();

$pageTitle = "Unique T-shirts designed by a frog";
$section = "home";
include(ROOT_PATH . 'inc/header.php'); ?>
		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="shirts.php">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>
				<h3 style="text-align:center;">This is a phony e-commerce site developed using PHP by Bob Tabor</h3>

				<ul class="products">
					<?php 

						$list_view_html = "";
						foreach($recent as $product) {
							$list_view_html = get_list_view_html($product) . $list_view_html;
						} 
						echo $list_view_html;
				?>								
				</ul>

			</div>

		</div>

<?php include(ROOT_PATH . 'inc/footer.php') ?>