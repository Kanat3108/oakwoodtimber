<?php
/**
 * Template name: product-page
 *
 */

get_header();


?>
<?php
$page_title = get_post_meta($post->ID, 'product_page_title_title', true) ? get_post_meta($post->ID, 'product_page_title_title', true) : '';
$page_desc = get_post_meta($post->ID, 'product_page_title_desc', true) ? get_post_meta($post->ID, 'product_page_title_desc', true) : '';
$page_bg = get_post_meta($post->ID, 'product_page_title_upload', true);
?>
<section class="p-s1" style="background: url(<?php echo $page_bg ?>) no-repeat center /cover;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="h2-all"><?php echo $page_title  ?></h2>
				<?php echo $page_desc ?>
			</div>
		</div>
	</div>
</section>
<?php 
$thick_title = get_post_meta($post->ID, 'product_thickness_title', true) ? get_post_meta($post->ID, 'product_thickness_title', true) : '';
$thick_list = get_post_meta($post->ID, 'product_thickness_list', true);

$width_title = get_post_meta($post->ID, 'product_width_title', true) ? get_post_meta($post->ID, 'product_width_title', true) : '';
$width_list = get_post_meta($post->ID, 'product_width_list', true);
$width_desc = get_post_meta($post->ID, 'product_width_desc', true) ? get_post_meta($post->ID, 'product_width_desc', true) : '';
?>
<div class="form">
	<section class="p-s2">
		<div class="container ">
			<div class="row">
				<div class="col-md-12">
					<h2 class="h2-all"><?php echo $thick_title ?></h2>
				</div>
				<?php foreach ($thick_list as $thick ) {
					$thick_title = $thick['product_thickness_title_value'] ? $thick['product_thickness_title_value'] : '' ;
					$thick_upload = $thick['product_thickness_upload'] ? $thick['product_thickness_upload'] : '';
					?>
					<div class="col-md-6 col-md-offset-3 type-p">
						<div class="ps2-item-wrap" style="border: 5px solid red;">
							<input type="checkbox" name="width" value="<?php echo $thick_title ?>" checked>
							<label for="<?php echo $thick_title ?>"><?php echo $thick_title ?></label>
							<img src="<?php echo $thick_upload ?>">
						</div>
					</div>
					<?php
				}
				?>

				<div></div>
			</div>
		</div>
	</section>

	<section class="p-s3" style="display: block;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="h2-all"><?php echo $width_title ?></h2>
					<p>Please, click on the picture to select </p>
				</div>
				<?php foreach ($width_list as $width ) {
					$width_title = $width['product_width_title_value'] ? $width['product_width_title_value'] : '' ;
					$width_upload = $width['product_width_upload'] ? $width['product_width_upload'] : '';
					?>
					<div class="col-md-3 type-p">
						<div class="ps3-item-wrap">
							<input type="checkbox" value="<?php echo $width_title ?>" name="color">
							<label for="<?php echo $width_title ?>"><?php echo $width_title ?></label>
							<img src="<?php echo $width_upload ?>">
						</div>
					</div>

					<?php
				}
				?>
				<div class="col-md-12" style="margin-top: 60px;"><?php echo $width_desc; ?></div>
			</div>
		</div>
	</section>
	<?php 
	$package_title = get_post_meta($post->ID, 'product_package_title', true) ? get_post_meta($post->ID, 'product_package_title', true) : '';
	$package_list = get_post_meta($post->ID, 'product_package_list', true);
	$package_desc = get_post_meta($post->ID, 'product_package_desc', true) ? get_post_meta($post->ID, 'product_package_desc', true) : '';
	?>

	<section class="p-s4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="h2-all"><?php echo $package_title ?></h2>
					<p>Please, click on the picture to select </p>
				</div>
				<?php
				foreach ($package_list as $package ) {
					$package_list_value = $package['product_package_title_value'] ? $package['product_package_title_value'] : '';
					$package_list_upload = $package['product_package_upload'] ? $package['product_package_upload'] : '';


					?>

					<div class="col-md-4 type-p">
						<div class="ps4-item-wrap">
							<input type="checkbox" value="<?php echo $package_list_value ?>" name="size">
							<label for="<?php echo $package_list_value ?>"><?php echo $package_list_value ?></label>
							<img src="<?php echo $package_list_upload ?>">
						</div>
					</div>
					<?php
				}
				?>
				<div class="col-md-12" style="margin-top: 60px;"><?php echo $package_desc; ?></div>
			</div>
		</div>
	</section>

	<?php 
	$quality_title = get_post_meta($post->ID, 'product_quality_title', true) ? get_post_meta($post->ID, 'product_quality_title', true) : '';
	$quality_list = get_post_meta($post->ID, 'product_quality_list', true);
	$quality_desc = get_post_meta($post->ID, 'product_quality_desc', true) ? get_post_meta($post->ID, 'product_quality_desc', true) : '';
	?>

	<section class="p-s5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="h2-all"><?php echo $quality_title ?></h2>
					<p>Please, click on the picture to select </p>
				</div>
				<?php
				foreach ($quality_list as $quality) {
					$quality_list_value = $quality['product_quality_title_value'] ? $quality['product_quality_title_value'] : '' ;
					$quality_upload = $quality['product_quality_upload'] ? $quality['product_quality_upload'] : '' ;
					?>
					<div class="col-md-4 type-p">
						<div class="ps5-item-wrap">
							<input type="checkbox" value="<?php echo $quality_list_value ?>" name="quality">
							<label for="<?php echo $quality_list_value ?>"><?php echo $quality_list_value ?></label>
							<img src="<?php echo $quality_upload ?>">
						</div>
					</div> 					
					<?php
				}
				?>
				<div class="col-md-12" style="margin-top:60px;"><?php echo $quality_desc ?></div>
			</div>
		</div>
		<button class="done-choose">SEND REQUEST TO CHECK THE PRICE</button>
	</section>
	<?php 
	$quality_list = get_post_meta($post->ID, 'product_page_form_shortcode', true);
	echo do_shortcode($quality_list);
	?>
</div>

<?php
//get_sidebar();
get_footer();


