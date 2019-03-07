<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Oakwood
 */

get_header();
?>

<section class="blog_item blog_item_1">
	<div class="container">
		<div class="blog_item-in">			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="item_desc-wrap">
							<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template/content', get_post_type() );

								the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
							endif;
							endwhile; // End of the loop.
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- #main -->
<?php setPostViews(get_the_ID()); ?>
<?php
//get_sidebar();
get_footer();
