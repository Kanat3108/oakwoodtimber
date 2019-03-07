<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oakwood
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<section class="home-s1">
		
		<div class="h-s1_carousel">
			<div class="h-s1_item1 h-s1_item">
				<div class="h-s1_inner container">
					<div class="h-s1_inner2">
						<h2 > Dubove podlahy LLC</h2>
						<p >Harmony and comfort. </p>
					</div>
				</div>
			</div>
			<div class="h-s1_item2 h-s1_item">
				<div class="h-s1_inner container">
					<div class="h-s1_inner2">	
						<h2 >Dubove podlahy LLC</h2>
						<p >Made to save your time and money. </p>
					</div>
				</div>
			</div>
			<div class="h-s1_item3 h-s1_item">
				<div class="h-s1_inner container">
					<div class="h-s1_inner2">
						<h2>Dubove podlahy LLC</h2>
						<p>Direct manufacturer without mediators. </p>
					</div>
				</div>
			</div>
		</div>

		<a href="#anchor_about-us" class='icon-scroll'></a>
	</section>

	<section>
		<div class="h_s2 about-us " id="anchor_about-us">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="h2-all">About us</h2>
						<p>Our company is a direct manufacturer of oak solid parquet. Dubove podlahy LLC is an enterprise with a long cycle of processing that allows us to fully control all technological processes at all stages of production that’s why we can guarantee our customers products made of solid oak wood with high quality level. Careful attitude to nature, waste-free production, constant staff development, introduction of advanced technologies allow our company to provide our customers with high-quality floor coverings at an affordable price.</p>
						<p>Many years of experience in the external and internal markets allows us to achieve selective quality of products. Floor boards are manufactured using modern European equipment which has already proved itself. Acquisition of oak floor boards is the perfect choice which will help you to emphasize the individuality and uniqueness of your interior. </p>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="home-s5">
		<div class="container">
			<h2 class="h2-all">Why Choose Us</h2>
			<div class="row">
				<div class="col-md-3">
					<div class="hs5-img hs5-img-1"></div>
					<h3>Trusted</h3>
				</div>
				<div class="col-md-3">
					<div class="hs5-img hs5-img-2"></div>
					<h3>High quality</h3>
				</div>
				<div class="col-md-3">
					<div class="hs5-img hs5-img-3"></div>
					<h3>Durability </h3>
				</div>
				<div class="col-md-3">
					<div class="hs5-img hs5-img-4"></div>
					<h3> Directly from producer</h3>
				</div>
			</div>
		</div>
		
	</section>

	<section class="home-s3" id="home-product-anchor">
		<div class="container">
			<div class="row">
				<h2 class="h2-all"> Our products</h2>
				<p>Don’t waste your time. Your choice can be quick and easy.</p>
				<!--<div class="col-md-6">
					<div class="home-product">
						<h3>LAMINÁT 14mm</h3>
						<a href="product.php">VIEW ></a>
						<div class="h-product1"></div>
					</div>

				</div>-->
				<div class="col-md-12">
					<div class="home-product ">
						<!--LAMINÁT 20mm-->
						<h3>Oak solid wood flooring</h3>
						<a href="product.php">VIEW ></a>
						<div class="h-product2"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="home-s4">
		<div class="container">
			<div class="row">
				<div class="h-s4-h2">
				<h2 class="h2-all">BLOG</h2>
			</div>
				<div class="col-md-4">
					<a href="blog_1.php"><div class="home-post post1">
						<div class="h-post-img h-post-img1"></div>
							<div class="h-post-date"><p>22. March 2018</p></div>
							<div class="h-post-name"><h3>Mighty Oak</h3></div>
							<div class="h-post-desc"><p>And for that there are several reasons. From oak boards you get beautiful, durable and wear-resistant floors, each with its own character. Various methods of surface treatment and abrasion make it possible to achieve many infinite variations.</p></div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="blog_2.php">
						<div class="home-post post2">
							<div class="h-post-img h-post-img2"></div>
							<div class="h-post-date"><p>17. August 2018</p></div>
							<div class="h-post-name"><h3>Lacquered parquet, care rules.</h3></div>
							<div class="h-post-desc"><p>Parquet flooring - a beautiful decoration of any living space; it is always prestige and durability. People prefer the tree for its qualities such as the newest production technologies, the characteristics of wood species, a lot of ways of laying limitlessly expand the decorative possibilities of the parquet.</p></div>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="blog_3.php">
						<div class="home-post post3">
							<div class="h-post-img h-post-img3"></div>
							<div class="h-post-date"><p>17. August 2018</p></div>
							<div class="h-post-name"><h3>Elimination of defects and damages</h3></div>
							<div class="h-post-desc"><p>Most of all, the wooden floor suffers from external influences: sand, pebbles, heels, - all this can very quickly turn your floor into disrepair. The best way to care for parquet floors is to prevent damage, but if minor scratches do appear, you can eliminate this defect yourself.</p></div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
