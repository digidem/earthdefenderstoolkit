<?php
get_header();

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$category = get_queried_object();
$args = array(
    'post_type' => 'post',
    'cat' => $category->term_id,
    'paged' => $paged
);

$the_query = new WP_Query($args);

?>

<div class="blog-page">
    <div class="blog-posts-container">
		<?php
// Check if there are any posts to display
if ($the_query->have_posts()): ?>
			<h1 class="category-title"><?php single_cat_title(); ?></h1>


		<?php
    // The Loop
    while ($the_query->have_posts()):
        $the_query->the_post(); ?>
            <div class="blog-post-container">
                <div class="blog-image-container">
			             <a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID() , 'full'); ?>"/></a>
                </div>
		            <h1 class="blog-title"><?php echo get_the_title(); ?></h1>
                <p class="blog-post-date"><strong><?php echo get_the_date(); ?></strong></p>
                <div class="blog-content-container">
                    <p class="blog-preview-content"><?php echo get_the_excerpt(); ?></p>
                </div>
                <a class="read-more-button" href="<?php echo get_the_permalink(); ?>"><?php echo __('Read More', 'EDT'); ?> <span>»</span></a>
            </div>
		<?php
  endwhile; ?>

    <div class="nav-previous alignleft"><?php previous_posts_link(  __( 'Newer Entries', 'EDT' ) ); ?></div>
    <div class="nav-next alignright"><?php next_posts_link( __( 'Older Entries', 'EDT'), $the_query->max_num_pages  ); ?></div>

<?php else: ?>
			<p><?php echo __('Sorry, no posts matched your criteria.', 'EDT'); ?></p>
		<?php
endif; ?>
    </div>
</div>

<?php
// get_sidebar();
get_footer();
