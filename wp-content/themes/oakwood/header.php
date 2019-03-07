<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oakwood
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="https://www.oakwoodtimber.com/favicon.ico?v=2" />
	<!--<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if(is_front_page()){
	//echo '<meta name="google-site-verification" content="MYdbDXBQl0CgfEbhviAr3mMWA9jwwwmC2041wHBbMMk" />';
	}; 
	?>-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a href="#" class="scrollup" style="display: none;"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" style="display: none;" href="#content"><?php esc_html_e( 'Skip to content', 'oakwood' ); ?></a>

	<header>
		<div class="container">
			<div class="row mobile-row">
				<div class="col-md-2 col-sm-2">
						<div id="logo">
							<a href="<?php echo home_url(); ?>">
								<?php if (ot_get_option( 'logo_upload' )){ 
									$image_url = ot_get_option( 'logo_upload' );
									$image_id = pippin_get_image_id($image_url);
									$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true);
								?>
								<img src="<?php echo ot_get_option( 'logo_upload' ); ?>" alt="<?php echo $image_alt  ?>">
								<?php }else{ ?>
								<h1><?php echo blog_info('name') ?></h1>
								<?php } ?>
							</a>
						</div>

				</div>

				<div class="nav-button">
					<?php if (ot_get_option( 'hamburger_upload' )){
						$image_url = ot_get_option( 'hamburger_upload' );
						$image_id = pippin_get_image_id($image_url);
						$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true);

					 ?>
					<img src="<?php echo ot_get_option('hamburger_upload') ?>" alt="<?php echo $image_alt ?>"></div>
					<?php }else{ ?>
					<h1></h1>
					<?php } ?>
				<div class="col-md-8 col-sm-9 nav-mobile">
					
					<div class="menu">
						<?php 
					$args = array(
						'theme_location' => 'primary',
						'menu' => '', 
						'menu_class' => '',
						'menu_id' => '',
						'container' => '',
						'container_class' => '',
						'container_id' => '',
						'fallback_cb' => '',
					);

					wp_nav_menu($args) ?>
					</div>
				</div>
				<div class="col-md-2 col-sm-1">
					<div id="langs"></div>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
