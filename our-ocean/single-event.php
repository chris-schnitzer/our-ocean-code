<?php
/**
 * The template for displaying all single posts
 * Template Name: Single Event
 * Template Post Type: post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Our_Ocean
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<div>
				<img src="<?php the_field('events_image'); ?>" />

				<div>
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
			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'our-ocean' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'our-ocean' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

			// // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;
			
		endwhile; // End of the loop.
		?>
		<!-- <p>single-event.php</p> -->
		
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
