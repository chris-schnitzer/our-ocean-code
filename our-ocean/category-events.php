<?php
/**
 * The template for displaying archive pages
 *Template Name: Events
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Our_Ocean
 */

get_header();

?>
	<main id="primary" class="site-main">
		<?php if ( have_posts() ) : ?>
			<h1>Find an <b>Event</b> near you whether it’s a beach <b>clean up</b>, a <b>demonstration</b>, a <b>summit</b> or a <b>fundraising</b> get together.
			</h1>
			<section class="post-list">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
					?>
					<div class="post-wrapper">
						<?php
							the_post();
							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
						?>
						<div class="image-info">
							<img src="<?php the_field('events_image'); ?>" />

							<div class="info">
								<div id="date">
									<h1><b><?php the_field('date'); ?></b></h1>
									<p class="light"><?php the_field('month') ?></p>	
								</div>
								
								<div class="font-med-weight" id="time-loc"><p class="time"><?php the_field('time'); ?></p>

								<p class="font-med-weight"><?php the_field('location'); ?></p>
								</div>	
							</div>	
						</div>	
						<?php
							get_template_part( 'template-parts/content-excerpt' );
						?>
						<a href="<?php  esc_url( the_permalink() )  ?>">Read More</a>
					</div>
					<hr>
					<?php
					endwhile;
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</section>
	</main><!-- #main -->
<!-- <h1>category-events.php</h1> -->
<?php
// get_sidebar();
get_footer();
