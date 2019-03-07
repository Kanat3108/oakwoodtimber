<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oakwood
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'oakwood' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'oakwood' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'oakwood' ), 'oakwood', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php 
					dynamic_sidebar('footer-left');
				?>
			</div>
			<div class="col-md-3">

				<?php
					dynamic_sidebar('footer-menu-1');
				?>
				<!--<ul>
					<li>
						<a href="access.php">General Terms and Conditions</a>
					</li>
					<li>
						<a href="how.php">How to use</a>
					</li>
					<li>
						<a href="download.php">Downloads</a>
					</li>
					<li>
						<a href="delivery.php">Delivery</a>
					</li>
				</ul>-->
			</div>
			<div class="col-md-3">
				<?php
					dynamic_sidebar('footer-menu-2');
				?>
				<!--<ul>

					<li>
						<a href="return.php">Complaints and returns</a>
					</li>
					<li>
						<a href="faq.php">FAQ</a>
					</li>
					<li>
						<a href="sitemap.html">sitemap</a>
					</li>
				</ul>-->
			</div>
			<div class="col-md-3 foot-info">
				<?php 
					dynamic_sidebar('footer-right');
				?>
				<!--
				<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
				<div>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> Czech Republic, Prague</p>-->
					<!--<p><i class="fa fa-clock-o" aria-hidden="true"></i>  (Mo – Fri) 9:00 – 18:00</p>-->
					<!--<p><i class="fa fa-phone" aria-hidden="true"></i>+420 777 447 419</p>
				</div>
				<div>
					<p>Whatsapp</p>
					<p>Viber</p>
					<p>Telegram</p>
				</div>-->
			</div>
		</div>
		<div class="row">
			<?php if (ot_get_option( 'copyright_footer' )){ ?>
				<div class="col-md-12 footer-rights">
					<p><?php echo ot_get_option( 'copyright_footer' ) ?></p>
				</div>
			<?php } ?>
		</div>
	</div>

</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
