<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oakwood
 */

get_header();
?>
<?php
while ( have_posts() ) : the_post();
?>
<section class="coorp-1" style="background: url(<?php the_post_thumbnail_url() ?>) no-repeat center /cover;">
	<div>
		<div class="container">
			<div class="row">
				<div class="coorp-1-wrap col-md-12">
					
						<h1 class="h1-all"><?php the_title() ?></h1>
						<?php the_content() ?>
						<?php
						endwhile; // End of the loop.
						?>
				</div>
			</div>
		</div>
	</div>
</section>		<!-- #main -->

	<?php
//get_sidebar();
	get_footer();
