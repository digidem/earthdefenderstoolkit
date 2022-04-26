<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EarthDefendersToolkit
 */

get_header();
?>

	<main id="primary" class="site-main single-post-container">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					// 'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'earthdefenderstoolkit' ) . '</span> <span class="nav-title">%title </span>',
					// 'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'earthdefenderstoolkit' ) . '</span> <span class="nav-title">%title </span>',
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__( '< Previous', 'earthdefenderstoolkit' ),
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next >', 'earthdefenderstoolkit' ),
				)
			);
			
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
