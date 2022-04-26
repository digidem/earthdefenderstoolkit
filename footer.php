<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EarthDefendersToolkit
 */

?>

<?php if(!is_front_page()): ?>
    <footer id="footer">
		<div class="top">
			<div class="feedback">
				<div class="header">
					<?php echo __('Tell us what you think', 'EDT'); ?>
				</div>
				<p>
					<?php echo __('Let us know what you’d like to see for The Earth Defenders Toolkit.', 'EDT'); ?>
				</p>
				<a href="https://forum.earthdefenderstoolkit.com/c/edt-feedback/3"><?php echo __('Provide Feedback', 'EDT'); ?></a>
			</div>

			<div class="links">
				<div class="header">
					Earth Defenders Toolkit
				</div>
				<div class="link">
					<a href="/home/?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>"><?php echo __('Home', 'EDT'); ?></a>
					<a href="/toolkit/?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>"><?php echo __('The Toolkit', 'EDT'); ?></a>
					<a href="/community/?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>"><?php echo __('Community', 'EDT'); ?></a>
					<a href="/contribute/?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>"><?php echo __('Contribute', 'EDT'); ?></a>
					<a href="/blog?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>">Blog</a>
					<a href="/about?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>"><?php echo __('About', 'EDT'); ?></a>
					<a href="/contact-us?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>"><?php echo __('Contact', 'EDT'); ?></a>
					<a href="/sitemap/?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>"><?php echo __('Sitemap', 'EDT'); ?></a>	
				</div>
			</div>
			<div class="footer-form">
				<p class="footer-form-header" style="text-align: left;">
					<?php echo __('Join the mailing list', 'EDT'); ?>
				</p>
				<?php echo do_shortcode('[contact-form-7 id="40" title="Email subscription"]')?>
			</div>
		</div>

        <div class="bottom-section">
			<?php echo __('Copyright', 'EDT'); ?> © 2021 Earth Defenders Toolkit
		</div>
    </footer>
</div>

<!-- CAROUSEL -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<?php wp_footer(); ?>
<?php endif; ?>


</body>
</html>
