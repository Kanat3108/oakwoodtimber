<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Business
 */
get_header(); ?>
<div>
	<main>
		<section class="coorp-1 home-s4">;
			<div>
				<div class="container">
					<div class="row">
						<div class="h-s4-h2">
							<h2 class="h2-all">BLOG</h2>
						</div>
						<?php if ( have_posts() ) : ?>

							<?php while ( have_posts() ) : the_post(); 
								$term_slugs = get_the_terms( $post->ID, 'service-cat' );
								$term_string = '';
								foreach ($term_slugs as $term) {
									$term_string .= $term->slug;
								}
								?>
								<div class="col-md-4 <?php echo $term_string; ?> " >
									<a href="<?php the_permalink(); ?>" style="text-decoration: none;">
									<div class="home-post">
										
											<?php the_post_thumbnail( 'medium' ); ?>
											<div class="h-post-name"><h3><?php the_title(); ?></h3></div>
											<div class="h-post-date"><p><?php the_date() ?></p></div>
											<div class="h-post-desc"><p>
												<?php the_excerpt(); ?></p>
											</div>
										
										
									</div>
									</a>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>

<!--<section class="blog_item">
		<div class="blog_item-in">			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="item_desc-wrap">
							<span class="item_date">10.05.2018</span>
							<h2 class="item_name">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
							<p ><b>Nullam id lectus tortor. Mauris non consectetur orci. Vestibulum iaculis sagittis eros facilisis dignissim. Nullam libero leo, interdum ac urna eu, dictum egestas risus. Morbi ullamcorper, ante sed commodo euismod, est est iaculis lacus, sit amet consectetur tellus leo in enim. Sed nec blandit lorem. Aenean tristique lorem nec sem consectetur bibendum. Curabitur non mi egestas, fermentum est sit amet, dapibus quam. Sed odio lacus, suscipit at pharetra in, tincidunt a sapien. Suspendisse eros nisi, ullamcorper nec lectus in, tempor malesuada sem.</b></p>

							<p>Morbi ac metus ac risus ultrices maximus in eget erat. Duis vulputate turpis eget purus volutpat, in tristique enim fermentum. Phasellus tempor varius risus, sit amet pretium orci convallis et. Nam ultricies sapien a lorem consequat consectetur. In in mollis urna. Vivamus mattis sem ut augue consequat pulvinar. Phasellus tincidunt dui eros, luctus cursus tortor sollicitudin sit amet. Maecenas viverra arcu dui, ut tincidunt eros sollicitudin id. In lobortis justo nisl, sit amet gravida sem euismod id. Proin commodo nisi quis cursus eleifend. In hac habitasse platea dictumst. Donec in ex pharetra, eleifend orci ut, tincidunt libero. Suspendisse velit neque, dapibus eu commodo et, lobortis et ipsum. Sed ullamcorper fringilla mollis.</p>

							<p >Nullam id lectus tortor. Mauris non consectetur orci. Vestibulum iaculis sagittis eros facilisis dignissim. Nullam libero leo, interdum ac urna eu, dictum egestas risus. Morbi ullamcorper, ante sed commodo euismod, est est iaculis lacus, sit amet consectetur tellus leo in enim. Sed nec blandit lorem. Aenean tristique lorem nec sem consectetur bibendum. Curabitur non mi egestas, fermentum est sit amet, dapibus quam. Sed odio lacus, suscipit at pharetra in, tincidunt a sapien. Suspendisse eros nisi, ullamcorper nec lectus in, tempor malesuada sem.</p>

							<p>Morbi ac metus ac risus ultrices maximus in eget erat. Duis vulputate turpis eget purus volutpat, in tristique enim fermentum. Phasellus tempor varius risus, sit amet pretium orci convallis et. Nam ultricies sapien a lorem consequat consectetur. In in mollis urna. Vivamus mattis sem ut augue consequat pulvinar. Phasellus tincidunt dui eros, luctus cursus tortor sollicitudin sit amet. Maecenas viverra arcu dui, ut tincidunt eros sollicitudin id. In lobortis justo nisl, sit amet gravida sem euismod id. Proin commodo nisi quis cursus eleifend. In hac habitasse platea dictumst. Donec in ex pharetra, eleifend orci ut, tincidunt libero. Suspendisse velit neque, dapibus eu commodo et, lobortis et ipsum. Sed ullamcorper fringilla mollis.</p>

						</div>
					</div>
				</div>
			</div>
		</div>


	</section>-->
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();