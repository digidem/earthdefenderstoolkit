<?php
get_header();
?>

<div class="blog-page">
    <div class="blog-posts-container">
			<h1 style="text-align: center; margin-bottom: 1em;"><?php echo get_the_archive_title(); ?></h1>

<?php
// The Loop
while (have_posts()):
    the_post(); ?>
            <div class="blog-post-container">
                <div class="blog-image-container">
			             <a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID() , 'full'); ?>"/></a>
                </div>
		            <h1 class="blog-title"><?php echo get_the_title(); ?></h1>
                <p class="blog-post-date"><strong><?php echo get_the_date(); ?></strong></p>
                <div class="blog-content-container">
                    <p class="blog-preview-content"><?php echo get_the_excerpt(); ?></p>
                </div>
                <a class="read-more-button" href="<?php echo get_the_permalink(); ?>">Read More <span>»</span></a>
            </div>
		<?php
endwhile; ?>
    </div>
</div>

<?php
// get_sidebar();
get_footer();
