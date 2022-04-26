<?php /* Template Name: About Page */ ?>
<?php
get_header();
?>

<div class="about-page">
    <div class="about-content">
<!-- 		[contact-form-7 id="324" title="Contact Us"] -->
		<h1>
			<?php echo get_the_title(); ?>
		</h1>
		<?php the_content(); ?>
    </div>
    <img class="blobs-image" src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/blobs.png" alt="">
</div>

<?php
get_footer();

