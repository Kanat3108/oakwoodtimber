<?php
/**
 * Template name: main-page
 *
 */

get_header();
?>

<?php
$slider_main = get_post_meta($post->ID, 'main_slider_list', true);
$main_blog_list = get_post_meta($post->ID, 'main_blog_list', true);
?>


<main id="main" class="site-main">
	<?php if ($slider_main && (get_post_meta($post->ID, 'main_slider_on_off', true) != 'off')) : ?>
		<section class="home-s1">
			<div class="h-s1_carousel">
				<?php
				foreach ($slider_main as $slider) :
					$slide_upload = $slider['main_slider_list_upload'] ? $slider['main_slider_list_upload'] : '';
					$slide_header = $slider['main_slider_list_header'] ? $slider['main_slider_list_header'] : '';
					$slide_under_header = $slider['main_slider_list_under_header'] ? $slider['main_slider_list_under_header'] : '';
					?>
					<div class=" h-s1_item" style="background-image:url(<?php echo $slide_upload ?>);">
						<div class="h-s1_inner container">
							<div class="h-s1_inner2">
								<h2> <?php echo $slide_header ?></h2>
								<p><?php echo $slide_under_header ?></p>
							</div>
						</div>
					</div>
					<?php
				endforeach;
				?>
			</div>
			<!--<a href="#anchor_about-us" class='icon-scroll'></a>-->
		</section>
	<?php endif; ?>

	<?php
	$main_about_bg = get_post_meta($post->ID, 'main_about_upload', true) ? get_post_meta($post->ID, 'main_about_upload', true) : '';
	$main_about_title = get_post_meta($post->ID, 'main_about_header', true) ? get_post_meta($post->ID, 'main_about_header', true) : '';
	$main_about_desc = get_post_meta($post->ID, 'main_about_desc', true);
	?>
	<section>
		<div class="h_s2 about-us" id="anchor_about-us" style="background-image: url(<?php echo $main_about_bg; ?>);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<?php echo $main_about_title ?>

						<?php  echo $main_about_desc ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="home-s5">
		<div class="container">
			<?php 
			$main_choose_title = get_post_meta($post->ID, 'main_choose_title', true) ? get_post_meta($post->ID, 'main_choose_title', true) : ''; 
			$main_choose_list = get_post_meta($post->ID, 'main_choose_list', true);
			?>
			<h2 class="h2-all"><?php echo $main_choose_title ?></h2>
			<div class="row">
				<?php
				foreach ($main_choose_list as $choose) { 
					$choose_upload = $choose['main_choose_list_upload'] ? $choose['main_choose_list_upload'] : '';
					$choose_title = $choose['main_choose_list_title'] ? $choose['main_choose_list_title'] : '';

					?>
					<div class="col-md-3">
						<div class="hs5-img" style="background-image:url(<?php echo $choose_upload ?>) ;"></div>
						<h3><?php echo $choose_title ?></h3>
					</div>
					<?php	
				}
				?>
			</div>
		</div>
	</section>


	<section class="home-s3" id="home-product-anchor">
		<div class="container">
			<div class="row">
				<?php 
				$main_product_title = get_post_meta($post->ID, 'main_product_title', true) ? get_post_meta($post->ID, 'main_product_title', true) : '';
				$main_product_desc = get_post_meta($post->ID, 'main_product_desc', true) ? get_post_meta($post->ID, 'main_product_desc', true) : '';
				$main_product_title_on = get_post_meta($post->ID, 'main_product_title_on', true) ? get_post_meta($post->ID, 'main_product_title_on', true) : '';
				$main_product_upload = get_post_meta($post->ID, 'main_product_upload', true) ? get_post_meta($post->ID, 'main_product_upload', true) : '';
				?>
				<h2 class="h2-all"> <?php echo $main_product_title ?></h2>
				<p><?php echo $main_product_desc ?></p>
				<div class="col-md-12">
					<div class="home-product ">
						<!--LAMINÁT 20mm-->
						<h3><?php echo $main_product_title_on ?></h3>
						<a href="/product-page/">VIEW ></a>
						<div class="h-product2" style="background:url(<?php echo $main_product_upload?> ) no-repeat center / cover;"></div>
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
				<?php
				foreach ($main_blog_list as $blog_id) :
					$blog = get_post($blog_id['main_blog_select'], ARRAY_A);
					$short_desc = substr($blog['post_content'], 0, 10);
					?>
					<div class="col-md-4">
						<a href="<?php echo get_the_permalink($blog['ID']) ?>">
							<div class="home-post post1">
								<div class="h-post-img" style="background:url( <?php echo get_the_post_thumbnail_url($blog['ID']) ?>) no-repeat center / cover;"></div>
								<div class="h-post-date"><p><?php echo get_the_date( 'd/m/Y', $blog['ID'])  ?></p></div>


								<div class="h-post-name"><h3><?php echo $blog['post_title'] ?></h3></div>
								<div class="h-post-desc"><p><?php echo wp_trim_words($blog['post_content'], 30, '...'); ?></p></div>
							</div>
						</a>
					</div>
					<?php
				endforeach;
				?>
			</div>
		</div>
	</section>


</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
