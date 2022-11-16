<?php
/**
 * The template for displaying all single posts
 * Template Name: Single News Story
 * Template Post Type: post
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
						<img src="<?php the_field('news-image'); ?>"/>
						<div class="single-news-info">
							<p class="font-med-weight"><span class="light">Posted on </span><?php the_field('post-date'); ?></p>
							<p class="font-med-weight"><span class="light">By </span><?php the_field('authorsource'); ?></p>
							
						</div>
					</div>
			<?
			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'our-ocean' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'our-ocean' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;
			
		endwhile; // End of the loop.
		?>
		<!-- <p>single-news-story.php</p> -->
		
	</main><!-- #main -->

<?php
// get_sidebar();
// get_footer();
