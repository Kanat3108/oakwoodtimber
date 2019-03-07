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
<?php
while ( have_posts() ) : 
?>
<section class="blog_item"  style="background: url(<?php the_post_thumbnail_url(); ?>)">
	<div class="container">
		<div class="blog_item-in">			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="item_desc-wrap">
							<?php
								the_post();

								get_template_part( 'template/content', get_post_type() );
								the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
							endif;
							?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section ><!-- #main -->
<?php
endwhile; // End of the loop.
?>
<?php
//get_sidebar();
get_footer();
