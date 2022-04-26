<?php
get_header();

$previous = get_previous_post();
$next = get_next_post();

$parent_page = get_field( "parent_page" );
$parent_page_title = '';


if( $parent_page ) {
	$parent_page_title = get_the_title($parent_page->ID);
}
?>

    <div class="special-page">
        <div class="special-page-inner">

            <?php
            while ( have_posts() ) :
                the_post();
                ?>

                    <div class="categories">
                        <a href="/?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>"><?php echo __('Home', 'EDT'); ?></a> <i class="fas fa-angle-right"></i>

                        <?php
                            if($parent_page_title !== '' ) :
                        ?>
							<a href="<?php echo '/' . $parent_page_title ?>?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>"><?php echo $parent_page_title?></a> <i class="fas fa-angle-right"></i>
                    	<?php
                        	endif;
                        ?>

                        <a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a>
                    </div>

                    <div class="title-section">
                        <h1><?php echo get_the_title(); ?></h1>
                        <!-- <a href="<?php  echo the_field("pdf_")["url"];?>" class="printer-logo">
                            <img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/Vector.png" alt="">
                        </a> -->
                    </div>

                    <div class="content-section">
                        <div class="featuredimage-container">
                            <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0]; ?>" alt="">
                        </div>
                        <div class="content-container">
                            <?php echo get_the_content(); ?>
                        </div>
                    </div>

						<?php

				$original_post_id = get_the_ID();
				$original_post_cat = get_the_category();
				endwhile; // End of the loop.
				wp_reset_postdata();
				?>



                    <div class="prev-next-section">
                      <?php
											    $args = array(
											        'post_type' => 'one-pager',
											        'post__not_in' => array( $original_post_id ),
											        'posts_per_page' => 2,
															'orderby' => 'rand',
											        'cat' => $original_post_cat[0]->term_id,
											    );
													$count = 0;
											    $query = new WP_Query( $args );
													if ( $query->have_posts() ) {
												    while ( $query->have_posts() ) {
											        $query->the_post();
															if($count == 0) {
                      ?>
                            <div class="prev">
                                <div class="left">
                                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' )[0]; ?>" alt="">
                                </div>
                                <div class="right">
                                    <span><?php echo get_the_category(get_the_ID())[0]->name ?></span>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                            </div>
													<?php
														} else {
													?>
	                            <div class="next">
	                                <div class="left">
	                                    <span><?php echo get_the_category(get_the_ID())[0]->name ?></span>
	                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	                                </div>
	                                <div class="right">
	                                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' )[0]; ?>" alt="">
	                                </div>
	                            </div>
													<?php
														}
														$count = $count + 1;
													}
												} ?>
                    </div>
                <?php
            ?>
        </div>
	</div>
<?php
get_footer();
