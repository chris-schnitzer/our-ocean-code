<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Our_Ocean
 */

get_header();
?>
	<main id="primary" class="site-main">
		<h1>All the <b>latest</b> happenings from our seas and beyond</h1>
		<section class="news-post-list">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				?>

				<div class="post-wrapper">
				<?php 
				the_post();
				?>

					<div class="image-info">
						<img src="<?php the_field('news-image'); ?>"/>
						<div class="news-info">
							<p class="font-med-weight"><span class="light">Posted on </span><?php the_field('post-date'); ?></p>
							<p class="font-med-weight"><span class="light">By </span><?php the_field('authorsource'); ?></p>
							
						</div>
					</div>
				<?php
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-excerpt' );
				?>
				<a href="<?php  esc_url( the_permalink() )  ?>">Read More</a>
				<hr>
			<?php
			endwhile;
			?>
			
				</div> <!--post-wrapper-->

		<?php 
		the_posts_navigation();
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</section>
	</main><!-- #main -->
	<!-- <p>home.php</p>	 -->
<?php
// get_sidebar();
get_footer();
