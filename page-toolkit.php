<?php /* Template Name: Toolkit Page */ ?>
<?php
get_header();

?>

<div class="general-page">
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
    <div class="tool-kit-content-section">
      <div class="content-section">
<!--       <h1><?php the_title()?></h1> -->
        <?php the_content() ?>
        <button class="skip-button" id="skip-tools"><?php echo __('Skip to the Toolfinder', 'EDT'); ?></button>
        <h2 id="skip-anchor"><?php echo __('I want to use tools to', 'EDT'); ?>...</h2>
        <div class="tool-option-group">
          <?php
			function get_language_shortcode() {
				return apply_filters( 'wpml_current_language', null );
			}
			$language = get_language_shortcode();
			switch ($language) {
				case 'en':
            		$categories = get_term_children(9, 'category');
					break;
				case 'es':
            		$categories = get_term_children(132, 'category');
					break;
				case 'pt-br':
            		$categories = get_term_children(136, 'category');
					break;
				case 'fr':
            		$categories = get_term_children(131, 'category');
					break;
				case 'sw':
            		$categories = get_term_children(133, 'category');
					break;
				case 'km':
            		$categories = get_term_children(165, 'category');
					break;	
				case 'th':
            		$categories = get_term_children(135, 'category');
					break;
				case 'vn':
            		$categories = get_term_children(166, 'category');
					break;					
			}
            foreach($categories as $category) {
              $term = get_term_by( 'id', $category, 'category' );
              ?>
                <div class="tool-option using-tools" data-terms="<?php echo sanitize_title($term->name);?>" data-label="<?php echo $term->name;?>">
                  <?php echo $term->name; ?>
                </div>
              <?php
            }
          ?>
        </div>
        <h2><?php echo __('I have access to', 'EDT'); ?>...</h2>
        <div class="tool-option-group">
          <?php
			switch ($language) {
				case 'en':
            		$categories = get_term_children(10, 'category');
					break;
				case 'es':
            		$categories = get_term_children(119, 'category');
					break;
				case 'pt-br':
            		$categories = get_term_children(124, 'category');
					break;
				case 'fr':
            		$categories = get_term_children(120, 'category');
					break;
				case 'sw':
            		$categories = get_term_children(122, 'category');
					break;
				case 'km':
            		$categories = get_term_children(161, 'category');
					break;	
				case 'th':
            		$categories = get_term_children(123, 'category');
					break;
				case 'vn':
            		$categories = get_term_children(162, 'category');
					break;					
			}
			foreach($categories as $category) {
              $term = get_term_by( 'id', $category, 'category' );
              ?>
                <div class="tool-option access-to" data-terms="<?php echo sanitize_title($term->name);?>" data-label="<?php echo $term->name;?>">
                  <?php echo $term->name; ?>
                </div>

              <?php
            }
          ?>
        </div>
        <h2><?php echo __('I need a tool that', 'EDT'); ?>...</h2>
        <div class="tool-option-group">
          <?php
			switch ($language) {
				case 'en':
            		$categories = get_term_children(11, 'category');
					break;
				case 'es':
            		$categories = get_term_children(127, 'category');
					break;
				case 'pt-br':
            		$categories = get_term_children(129, 'category');
					break;
				case 'fr':
            		$categories = get_term_children(130, 'category');
					break;
				case 'sw':
            		$categories = get_term_children(125, 'category');
					break;
				case 'km':
            		$categories = get_term_children(163, 'category');
					break;	
				case 'th':
            		$categories = get_term_children(126, 'category');
					break;
				case 'vn':
            		$categories = get_term_children(164, 'category');
					break;					
			}            foreach($categories as $category) {
              $term = get_term_by( 'id', $category, 'category' );
              ?>
                <div  class="tool-option need-tool" data-terms="<?php echo sanitize_title($term->name);?>" data-label="<?php echo $term->name;?>">
                  <?php echo $term->name; ?>
                </div>

              <?php
            }
          ?>
        </div>
        <button class="skip-button" id="see-tools"><?php echo __('See the Tools', 'EDT'); ?></button>
      </div>
      <div class="the-tool-kit" id="the-tool-kit">
        <div class="content-section">
          <h2 id="see-tool-anchor">
<span><?php echo __('My Earth Defenders Toolkit', 'EDT'); ?></span>
                       <span class="printer-logo">
                            <img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/Vector.png" alt="">
                        </span>
</h2>
          <div class="tool-kit-selected-table">
            <div class="tool-kit-selected-section">
              <h2 style="color: white !important;"><?php echo __('I am using tools to', 'EDT'); ?>: </h2>
              <!-- <p style="color: white !important; font-size: 15px !important">testing </h6> -->
              <div class="grid-list" id="using-tools">
              </div>
            </div>
            <div class="tool-kit-selected-section" >
              <h2 style="color: white !important;"><?php echo __('I have access to', 'EDT'); ?>: </h2>
              <div class="grid-list" id="access-to">
              </div>
            </div>
            <div class="tool-kit-selected-section last-box">
              <h2 style="color: white !important;"><?php echo __('I need a tool that', 'EDT'); ?>: </h2>
              <div class="grid-list" id="need-tool" >
              </div>
            </div>
          </div>
          <p id="clear-filters" style="color:white;"><?php echo __('Clear all filters', 'EDT'); ?> (<span class="filterNumber">0</span>)</p>
          <p style="color:white !important;"><?php echo __('SELECTED TOOLS', 'EDT'); ?></p>
			</p>
          <div class="tool-kit-results">
              <p class="no-results">
				  <?php echo __('No tools meet these criteria. If you would like to share more about your needs with the Earth Defenders Toolkit community to see if somebody can help, please feel free to post in the', 'EDT'); ?> <a href="http://forum.earthdefenderstoolkit.com/"><?php echo __('Forum', 'EDT'); ?></a>.
				  <br><br>
				  <?php echo __('If you know of a tool that matches these needs, please also feel free to share information about that in the', 'EDT'); ?> <a href="http://forum.earthdefenderstoolkit.com/"><?php echo __('Forum', 'EDT'); ?></a>.
			  </p>

              <?php
              $query = new WP_Query( array(
                'post_type' => 'resources',
				'posts_per_page' => -1,
				  'orderby' => 'title',
			      'order'   => 'ASC'
              ));
              // The Loop
              while ( $query->have_posts() ) {
                $query->the_post();
                $these_categories_ids = wp_get_post_categories(get_the_ID());
                $these_categories_strings = '';
                foreach($these_categories_ids as $category) {
                  $term = get_term_by( 'id', $category, 'category' );
                  $these_categories_strings .= ' ' . sanitize_title($term->name);
                }
                $content = get_the_content();
                ?>
                <div class="result-box" data-terms="<?php echo $these_categories_strings; ?>">
                  	<div class="box-image">
						<img src="<?php echo get_the_post_thumbnail_url() ?>" width="200" alt="logo" >
					</div>
					<div class="box-content" style="padding: 25px;">
						<h2><?php echo get_the_title() ?></h2>
						<?php echo $content; ?>
      			<div style="margin-top: 30px;">
              <a class="orange-button" target="_blank" href="<?php echo get_post_field("resource-link")?>">
                <?php echo __('Visit Website', 'EDT'); ?>
              </a>
            </div>
            <p class="expand-button" style="margin-top: 30px; text-decoration: underline;
                font-weight: bold; cursor: pointer;
                color: rgb(43, 56, 65);"><?php echo __('Learn More', 'EDT'); ?> <span class="arrow-show">↓</span></p>
            <div class="expand-content"><?php echo preg_replace("/<p[^>]*>(?:\s|&nbsp;)*<\/p>/", '', get_field('extra_content')); ?></div>
					</div>
                </div>
                <?php
              }
              ?>
          </div>
        </div>
      </div>

    </div>
		<div class="acknowledgment-section-outter">
		<div class="acknowledgment-section">
		 <p><strong><?php echo __('Acknowledgment', 'EDT'); ?>: </strong><?php echo __('The Earth Defenders Toolkit is being built in solidarity, consultation, and co-creation with Indigenous and marginalized communities in Latin America, Asia, and Sub-Saharan African at every point of the way. We are deeply grateful to our partners who are working to achieve transformative change, and help us understand how we can best serve their needs', 'EDT'); ?>.</p>
		 <br>
		</div>
	</div>

<script>
  jQuery(document).ready(function(){
    let usingFilter = []
	let usingLabel = []
    let accessFilter = []
	let accessLabel = []
    let needFilter = []
	let needLabel = []

    jQuery(document).on('click', '.tool-option', function() {
      var thisData = jQuery(this).data('terms');
	  var thisLabel = jQuery(this).data('label');
      var numberVisible = 0;
      if(jQuery(this).hasClass('tool-option-selected')) {
        jQuery(this).removeClass('tool-option-selected')
      } else {
        jQuery(this).addClass('tool-option-selected')
      }
      if(jQuery(this).hasClass('using-tools')) {
        if(usingFilter.indexOf(thisData) > -1) {
          usingFilter.splice(usingFilter.indexOf(thisData), 1);
		  usingLabel.splice(usingLabel.indexOf(thisData), 1);
        } else {
          usingFilter.push(thisData);
		  usingLabel.push(thisLabel);
        }
      }
      if(jQuery(this).hasClass('access-to')) {
        if(accessFilter.indexOf(thisData) > -1) {
          accessFilter.splice(accessFilter.indexOf(thisData), 1);
		  accessLabel.splice(accessLabel.indexOf(thisData), 1);
        } else {
          accessFilter.push(thisData);
		  accessLabel.push(thisLabel);
        }
      }
      if(jQuery(this).hasClass('need-tool')) {
        if(needFilter.indexOf(thisData) > -1) {
          needFilter.splice(needFilter.indexOf(thisData), 1);
		  needLabel.splice(needLabel.indexOf(thisData), 1);
        } else {
          needFilter.push(thisData);
		  needLabel.push(thisLabel);
        }
      }
      jQuery('.result-box').each(function() {
        var anyUseFilter = usingFilter.length > 0 ? false : true;
        usingFilter.forEach(filter => {
          if(jQuery(this).data('terms').indexOf(filter) > -1) {
            anyUseFilter = true;
          }
        })
        var anyAccessFilter = accessFilter.length > 0 ? false : true;
        accessFilter.forEach(filter => {
          if(jQuery(this).data('terms').indexOf(filter) > -1) {
            anyAccessFilter = true;
          }
        })
        var allNeedFilters = true;
        needFilter.forEach(filter => {
          if(jQuery(this).data('terms').indexOf(filter) === -1) {
            allNeedFilters = false;
          }
        })
        var visible = false;
        if(anyUseFilter && anyAccessFilter && allNeedFilters) {
          visible = true;
        }
        if(visible || (usingFilter.length === 0 && accessFilter.length === 0 && needFilter.length === 0)) {
          jQuery(this).show()
          numberVisible += 1;
        } else {
          jQuery(this).hide()
        }
      })
      jQuery("#clear-filters .filterNumber").text(usingFilter.length + accessFilter.length + needFilter.length)
      if(numberVisible === 0) {
        jQuery('.no-results').show();
      } else {
        jQuery('.no-results').hide();
      }

      //add back filters
      jQuery('#using-tools').find('p').remove();
      usingLabel.forEach(element => {
        var parent = document.getElementById("using-tools");
        var formatted = element.replace(/-/g, ' ')
        parent.insertAdjacentHTML('beforeend', `<p style="text-transform: capitalize; color: white !important; font-size: 15px !important">${formatted} </p>`);
      });
      jQuery('#access-to').find('p').remove();
      accessLabel.forEach(element => {
        var parent = document.getElementById("access-to");
        var formatted = element.replace(/-/g, ' ')
        parent.insertAdjacentHTML('beforeend', `<p style="text-transform: capitalize; color: white !important; font-size: 15px !important">${formatted} </p>`);
      });
      jQuery('#need-tool').find('p').remove();
      needLabel.forEach(element => {
        var parent = document.getElementById("need-tool");
        var formatted = element.replace(/-/g, ' ')
        parent.insertAdjacentHTML('beforeend', `<p style="text-transform: capitalize; color: white !important; font-size: 15px !important">${formatted} </p>`);
      });
    });

    //load jquery
    jQuery("#skip-tools").click(()=>{
      var elmnt = document.getElementById("skip-anchor");
      elmnt.scrollIntoView();
    })

    jQuery("#see-tools").click(()=>{
      var elmnt = document.getElementById("see-tool-anchor");
      elmnt.scrollIntoView();
    })

    jQuery("#clear-filters").click(()=>{
      // filter = []
      usingFilter = []
	  usingLabel = []
      accessFilter = []
	  accessLabel = []
	  needFilter = []
	  needLabel = []
		
      jQuery('.tool-option').each(function() {
        jQuery(this).removeClass('tool-option-selected')
      })
      jQuery('.result-box').each(function() {
        jQuery(this).show()
      });
      jQuery('.no-results').hide();
      jQuery('#using-tools').find('p').remove();
      jQuery('#access-to').find('p').remove();
      jQuery('#need-tool').find('p').remove();
      jQuery("#clear-filters .filterNumber").text("0")
    })
  });

  jQuery(document).on('click', '.expand-button', function() {
    console.log(jQuery(this).next())
    var nextEle = jQuery(this).next();
    if(nextEle.is(':visible')) {
      jQuery(this).find('.arrow-show').html('↓')
      nextEle.fadeOut()
    } else {
      jQuery(this).find('.arrow-show').html('↑')
      nextEle.fadeIn()
    }
  })

  jQuery('.printer-logo').on('click',function(){
    window.print();
  })

</script>

<?php
// get_sidebar();
get_footer();
