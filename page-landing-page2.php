<?php /* Template Name: Landing Page2 */ ?>
<?php
get_header();

?>
<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>

<div class="landing-page2">
    <div class="landing-main" style="background-image: url('<?php echo $thumb_url ?>');">
        <div class="landing-main-inner">
            <div class="content">
				<p class="header">
                    <?php echo get_the_title(); ?>
                </p>
            </div>
        </div>
    </div>

	<div class="about-page">
		<div class="about-content">

			<?php echo get_the_content(); ?>
		</div>
		<img class="blobs-image" src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/blobs.png" alt="">
	</div>
</div>


<?php
get_footer();