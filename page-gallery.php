<?php
/* Template Name: Gallery Archive */

get_header();
$locations = new WP_Query(array(
    'post_type' => "gallery",
    'posts_per_page' => - 1
));
?>

	<main id="primary" class="site-main gallery-page">

		<div class="gallery-archive-page">
    	<div class="top-section">
			<div class="logo">
				<img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/12/EDT-asset-light-logo.png" alt="">
			</div>
			<div class="image small" style="background-image: url(https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/general-image3.jpg)"></div>
			<div class="image large" style="background-image: url(https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/general-image2-scaled.jpg)"></div>
			<div class="image large" style="background-image: url(https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/general-image1.jpg)"></div>
			<div class="image small" style="background-image: url(https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/front-page-bg.jpg)"></div>
			<div class="overlay"></div>
			<div class="title">
				<div>
					<span><?php echo get_the_title() ?></span>
				</div>
			</div>
    </div>

		<?php if ($locations->have_posts()): ?>

				<div class="container">
  				<div class="blog-post-container">
  					<img class="blobs-image" src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/blobs.png" alt="">

      			<div class="extra-content">
        		    <p><?php echo get_the_content(); ?></p>
  					</div>
			       <div class="row flex">

        			<?php
              /* Start the Loop */
              while ($locations->have_posts()):
                  $locations->the_post(); ?>

            	<div class="col-lg-4 col-sm-6">
    			       <div class="thumbnail">

                 <?php if (get_field('media')) { ?>
      						<div class="gallery-video-container">
      							<div href='<?php echo get_field('media'); ?>' data-toggle="lightbox" data-gallery="example-gallery" data-type="video" data-width="1280" style="cursor:pointer;">
                      <div class="caption-data">
                        <?php echo get_the_date(); ?>: <strong><?php echo get_the_title(); ?></strong> - <?php echo get_field('thumbnail') ['caption']; ?><br>
					              <em><?php echo __('Contributor', 'EDT'); ?></em>: <?php echo get_field('contributor'); ?> (<a href="<?php echo get_field('contributorwebsite'); ?>"><?php echo get_field('contributorwebsite'); ?></a>)
                      </div>
      								<div class="gallery-background" style="background-image: url(<?php echo get_field('thumbnail') ['sizes']['medium']; ?>);"></div>
							        <span class="video-tag"><?php echo __('Video Available', 'EDT'); ?></span>
      								<div class="content">
      									<span class="date"><?php echo get_the_date(); ?></span>
                        <span class="title"><?php echo get_the_title(); ?></span>
				              </div>
                    </div>
			             </div>
			           <?php } else if(get_field('embedded_video')) { ?>
      						<div class="gallery-image-container">
      							<div href='<?php echo get_field('embedded_video'); ?>' data-toggle="lightbox" data-gallery="example-gallery" style="cursor:pointer;">
                      <div class="caption-data">
                        <?php echo get_the_date(); ?>: <strong><?php the_title(); ?></strong> - <?php echo get_field('thumbnail') ['caption']; ?><br>
    			               <em><?php echo __('Contributor', 'EDT'); ?></em>: <?php echo get_field('contributor'); ?> (<a href="<?php echo get_field('contributorwebsite'); ?>"><?php echo get_field('contributorwebsite'); ?></a>)
                      </div>
      								<div class="gallery-background" style="background-image: url(<?php echo get_field('thumbnail') ['sizes']['medium']; ?>)"></div>
                      <span class="video-tag"><?php echo __('Video Available', 'EDT'); ?></span>
                      <div class="content">
                        <span class="date"><?php echo get_the_date(); ?></span>
                        <span class="title"><?php echo get_the_title(); ?></span>
                      </div>
			              </div>
		             </div>
               <?php } else if(get_field('pdf')) { ?>
                  <div class="gallery-image-container">
                    <div href='<?php echo get_field('thumbnail') ["url"] ?>' data-toggle="lightbox" data-gallery="example-gallery" style="cursor:pointer;">
                      <div class="caption-data">
                        <a href="<?php echo get_field('pdf') ["url"]; ?>" target="_blank">View PDF</a><br />
                        <?php echo get_the_date(); ?>: <strong><?php the_title(); ?></strong> - <?php echo get_field('thumbnail') ['caption']; ?><br>
                         <em><?php echo __('Contributor', 'EDT'); ?></em>: <?php echo get_field('contributor'); ?> (<a href="<?php echo get_field('contributorwebsite'); ?>"><?php echo get_field('contributorwebsite'); ?></a>)
                      </div>
                      <div class="gallery-background" style="background-image: url(<?php echo get_field('thumbnail') ['sizes']['medium']; ?>)"></div>
                      <span class="video-tag"><?php echo __('PDF Available', 'EDT'); ?></span>
                      <div class="content">
                        <span class="date"><?php echo get_the_date(); ?></span>
                        <span class="title"><?php echo get_the_title(); ?></span>
                      </div>
                    </div>
                 </div>
               <?php } else { ?>
                  <div class="gallery-image-container">
                    <div href='<?php echo get_field('thumbnail') ["url"] ?>' data-toggle="lightbox" data-gallery="example-gallery" style="cursor:pointer;">
                      <div class="caption-data">
                        <?php echo get_the_date(); ?>: <strong><?php the_title(); ?></strong> - <?php echo get_field('thumbnail') ['caption']; ?><br>
                         <em><?php echo __('Contributor', 'EDT'); ?></em>: <?php echo get_field('contributor'); ?> (<a href="<?php echo get_field('contributorwebsite'); ?>"><?php echo get_field('contributorwebsite'); ?></a>)
                      </div>
                      <div class="gallery-background" style="background-image: url(<?php echo get_field('thumbnail') ['sizes']['medium']; ?>)"></div>
                      <div class="content">
                        <span class="date"><?php echo get_the_date(); ?></span>
                        <span class="title"><?php echo get_the_title(); ?></span>
                      </div>
                    </div>
                 </div>
          <?php } ?>
				</div>
			</div>
			<?php
        /*
         * Include the Post-Type-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Type name) and that will be used instead.
        */
        // get_template_part( 'template-parts/content', get_post_type() );

    endwhile;

    // the_posts_navigation();
    else:

        get_template_part('template-parts/content', 'none');

    endif;
?>

      		</div>

      	 </div>
	     </div>
		</div>
	</main><!-- #main -->
<script >
	var $jq = jQuery.noConflict();
	$jq (()=>{
		$jq (document).on('click', '[data-toggle="lightbox"]', function(event) {
				event.preventDefault();
				$jq (this).ekkoLightbox({ showArrows: false });
				$jq('.modal-body').append($(this).find('.caption-data').html());
		});
	})
	</script>
<?php
    // get_sidebar();
    get_footer();
