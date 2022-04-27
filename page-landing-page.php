<?php /* Template Name: Landing Page */ ?>
<?php
get_header();

$args = array(
    'post_type' => 'post',
    'posts_per_page' => '3',
);

$the_query = new WP_Query($args);

$onePagers = array(
    'post_type' => 'one-pager',
    'posts_per_page' => '3',
	'category_name' => 'Case Study',
);

$op_query = new WP_Query($onePagers);

?>

<div class="landing-page">
    <!-- <div class="landing-page-content">
        THIS IS THE LANDING PAGE
    </div> -->

    <div class="landing-main">
        <div class="landing-main-inner">
            <div class="content">
                <p class="header">
                    <?php echo __('The', 'EDT'); ?> EARTH DEFENDERS TOOLKIT
                </p>
                <p class="body">
                    <?php echo __('is a collaborative space for earth defender communities and their allies', 'EDT'); ?>
                </p>
            </div>

            <a href="#blobs">
    			<?php echo __('LEARN MORE', 'EDT'); ?> <i class="fas fa-sort-down" aria-hidden="true"></i>
            </a>
        </div>
    </div>

    <div class="landing-info" id="blobs">
        <div class="landing-info-inner">
            <div class="top">
                <h1><?php echo __('I am here to...', 'EDT'); ?></h1>
                <div class="contents">
						<a href="/community?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>" class="content">
                        <img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/blob1.png" alt="">
                        <div class="detail">
                            <div class="header"><?php echo __('learn about and connect with other earth defenders', 'EDT'); ?></div>
                            <div class="type"><?php echo __('COMMUNITY', 'EDT'); ?></div>
                        </div>
                    </a>

						<a href="/toolkit?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>" class="content">
                        <img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/blob2.png" alt="">
                        <div class="detail">
                            <div class="header"><?php echo __('learn about earth defender tools', 'EDT'); ?></div>
                            <div class="type"><?php echo __('TOOLKIT', 'EDT'); ?></div>
                        </div>
                    </a>

						<a href="/contribute?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>" class="content">
                        <img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/06/blob3.png" alt="">
                        <div class="detail">
                            <div class="header"><?php echo __('share what I know and help the cause', 'EDT'); ?></div>
                            <div class="type"><?php echo __('CONTRIBUTE', 'EDT'); ?></div>
                        </div>
                    </a>
                </div>
            </div>

<!-- CAROUSEL -->
<div class="carousel-for-featuredtool">
  <div class="bottom" style="padding: 15px">
    <div class="left">
      <img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/leftimage.png" alt="" />
    </div>
    <div class="right">
      <h4><?php echo __('FEATURED TOOL', 'EDT'); ?></h4>
      <h1><i class="fas fa-map-marker-alt"></i> MAPEO</h1>
      <p><?php echo __('Mapeo was built with and for earth defenders to easily document environmental and human rights information and to collect data about their land.', 'EDT'); ?></p>

		<a href="/toolkit/mapeo-map-and-monitor-the-world-around-you?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>">
	  <button><?php echo __('Learn More', 'EDT'); ?></button></a>
    </div>
  </div>
  <div class="bottom" style="padding: 15px">
    <div class="left">
      <img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/general-image2-scaled.jpg" alt="" />
    </div>
    <div class="right">
      <h4><?php echo __('FEATURED TOOL', 'EDT'); ?></h4>
      <h1><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/06/Terrastories-icon.png" style="width: 50px" /> TERRASTORIES</h1>
      <p>
        <?php echo __('Terrastories is an application for communities to map, protect, and share stories about their land. It can be used by individuals or communities who want to connect audio or video content to places on a map.', 'EDT'); ?>
      </p>

		<a href="/toolkit/terrastories-a-tool-for-place-based-storytelling?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>">
	  <button><?php echo __('Learn More', 'EDT'); ?></button></a>
    </div>
  </div>
  <div class="bottom" style="padding: 15px">
    <div class="left">
      <img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/06/1582741283375-img_9000.jpg" alt="" />
    </div>
    <div class="right">
      <h4><?php echo __('FEATURED TOOL', 'EDT'); ?></h4>
      <h1><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/Community-Lands.png" style="width: 50px" /> COMMUNITY LANDS</h1>
      <p><?php echo __('Community Lands is a website management tool for communities to publish information about way of life, news and stories about the threats and challenges they face, and efforts to protect their lands.', 'EDT'); ?>
      </p>

		<a href="/toolkit/community-lands-a-content-management-system-for-communities?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>">
	  <button><?php echo __('Learn More', 'EDT'); ?></button></a>
    </div>
  </div>
</div>

<div class="mobile-featuredtool">
  <div class="bottom">
    <div class="left">
      <img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/leftimage.png" alt="" />
    </div>
    <div class="right">
      <h4><?php echo __('FEATURED TOOL', 'EDT'); ?></h4>
      <h1><i class="fas fa-map-marker-alt"></i> MAPEO</h1>
      <p><?php echo __('Mapeo was built with and for earth defenders to easily document environmental and human rights information and to collect data about their land.', 'EDT'); ?></p>

		<a href="/toolkit/mapeo-map-and-monitor-the-world-around-you?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>">
	  <button><?php echo __('Learn More', 'EDT'); ?></button></a>
    </div>
  </div>
  <div class="bottom">
    <div class="left">
      <img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/general-image2-scaled.jpg" alt="" />
    </div>
    <div class="right">
      <h4><?php echo __('FEATURED TOOL', 'EDT'); ?></h4>
      <h1><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/06/Terrastories-icon.png" style="width: 50px" /> TERRASTORIES</h1>
      <p>
        <?php echo __('Terrastories is an application for communities to map, protect, and share stories about their land. It can be used by individuals or communities who want to connect audio or video content to places on a map.', 'EDT'); ?>
      </p>

		<a href="/toolkit/terrastories-a-tool-for-place-based-storytelling?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>">
	  <button><?php echo __('Learn More', 'EDT'); ?></button></a>
    </div>
  </div>
  <div class="bottom">
    <div class="left">
      <img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/06/1582741283375-img_9000.jpg" alt="" />
    </div>
    <div class="right">
      <h4><?php echo __('FEATURED TOOL', 'EDT'); ?></h4>
      <h1><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/Community-Lands.png" style="width: 50px" /> COMMUNITY LANDS</h1>
      <p><?php echo __('Community Lands is a website management tool for communities to publish information about way of life, news and stories about the threats and challenges they face, and efforts to protect their lands.', 'EDT'); ?></p>

		<a href="/toolkit/community-lands-a-content-management-system-for-communities?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>">
	  <button><?php echo __('Learn More', 'EDT'); ?></button></a>
    </div>
  </div>
</div>

            </div>
        </div>
    </div>


    <div class="landing-community">
        <div class="landing-community-inner">
            <div class="top">
                <h1><?php echo __('Amplifying Frontline Communities', 'EDT'); ?></h1>
                <div class="info">
                    <?php echo __('LATEST CASE STUDIES', 'EDT'); ?>
                </div>
                <button>
                    <a href="/community?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>"><?php echo __('More from the Community', 'EDT'); ?></a>
                </button>
            </div>

			<div class="content-section">
				<p><?php the_content() ?></p>
			</div>

			<div class="posts">
                <?php
                if($op_query->have_posts()) :
                    while ( $op_query->have_posts() ) : $op_query->the_post(); ?>
                        <div class="post">
                            <div class="image">
                                <a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"/></a>
                            </div>

                            <div class="content">
                                <span class="date"><?php echo get_the_date(); ?></span>
                                <span class="title"><?php echo get_the_title(); ?></span>
                            </div>
                        </div>
                    <?php endwhile;

                else: ?>
                    <p><?php echo __('Sorry, no posts matched your criteria.', 'EDT'); ?></p>
                <?php endif; ?>
            </div>



<!--             <div class="bottom">
                <div class="left">
                    <h1>Support The Toolkit</h1>
                    <p>Donate today to continue the fight for land rights!</p>
                </div>
                <div class="right">
                    <div class="values">
                        <button>$1</button>
                        <button>$5</button>
                        <button>$15</button>
                        <button>$25</button>
                        <button>$35</button>
                    </div>

                    <button class="donate-button">Donate</button>
                </div>
            </div> -->
        </div>
    </div>
	<div class="acknowledgment-section-outter">
		<div class="acknowledgment-section">
		 <p><strong><?php echo __('Acknowledgment', 'EDT'); ?>: </strong><?php echo __('The Earth Defenders Toolkit is being built in solidarity, consultation, and co-creation with Indigenous and marginalized communities in Latin America, Asia, and Sub-Saharan African at every point of the way. We are deeply grateful to our partners who are working to achieve transformative change, and help us understand how we can best serve their needs.', 'EDT'); ?></p>
		 <br>
		</div>
	</div>
    <div class="landing-partners">
        <div class="landing-partners-inner">
            <h1>
                <?php echo __('The Earth Defenders Toolkit is made possible with support of our amazing partners', 'EDT'); ?>
            </h1>

            <div class="partner-section">
                <span>
                    <?php echo __('A Project Of', 'EDT'); ?>
                </span>
            </div>

            <div class="partner">
                <a href="https://www.digital-democracy.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/digitaldemocracy.png" alt=""></a>
            </div>

            <div class="partner-section">
                <span>
                    <?php echo __('Cocreation Partners', 'EDT'); ?>
                </span>
            </div>

            <div class="partner partners">

				<div class="wrapper">
					 <a href="https://www.alianzaceibo.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/06/CIEBO-Alliance-Logow.png" style="width: 100px;"></a>
				</div>
				<div class="wrapper">
					 <a href="https://www.amazonteam.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/ACT.png" alt=""></a>
                </div>
                <div class="wrapper">
					 <a href="https://amazonfrontlines.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/AF.png" alt=""></a>
                </div>
                <div class="wrapper">
					 <a href="https://amarakaeri.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/06/ECA-Amarakaeri-1.png" alt="" style="width: 120px;"></a>
                </div>
                <div class="wrapper">
 					<a href="http://www.forestpeoples.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/FPP.png" alt=""></a>
				</div>
                <div class="wrapper">
					 <a href="https://ewmi.org/Program/OpenDevelopmentInitiative" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/ODI.png" alt=""></a>
                </div>
				<div class="wrapper">
					 <a href="https://www.raksthai.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/06/Raks-Thai.png" alt="" style="width: 100px;"></a>
                </div>
                <div class="wrapper">
					 <a href="http://wapichanao.communitylands.org/index.html" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/07/SRDC-Logo-1.jpg" alt="" style="width: 120px;"></a>
                </div>				
            </div>
            <div class="partner-section">
                <span>
                    <?php echo __('Toolkit Allies', 'EDT'); ?>
                </span>
            </div>

            <div class="partner partners">
                <div class="wrapper">
					<a href="https://alleyesontheamazon.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/AEA.png" style="width: 140px;" alt=""></a>
				</div>
				<div class="wrapper">
					<a href="https://www.globalforestwatch.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/GFW.png" alt=""></a>
                </div>
                <div class="wrapper">
					<a href="https://hypercore-protocol.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/hypercore-protocol.png" style="width: 120px;" alt=""></a>
                </div>
                <div class="wrapper">
					<a href="https://ifnotusthenwho.me/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/12/INUTW.png" style="width: 120px;" alt=""></a>
                </div>
				<div class="wrapper">
					<a href="https://indigenousmaps.com/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/12/IndigenousMaps.jpg" alt="" style="width: 120px;"></a>
                </div>
				<div class="wrapper">
					<a href="https://www.mapbox.com/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/Mapbox.png" style="width: 140px;" alt=""></a>
                </div>
				<div class="wrapper">
					<a href="https://native-land.ca/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/maplogo.png" alt=""></a>
                </div>
                <div class="wrapper">
					<a href="https://naturaljustice.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/06/NJ-Logo-Orange.jpg" style="width: 140px;" alt=""></a>
                </div>
                <div class="wrapper">
					<a href="https://www.oneearth.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/OE.png" alt=""></a>
                </div>
				<div class="wrapper">
					<a href="https://oxfam.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/06/oxfam.png" style="width: 140px;" alt=""></a>
                </div>
				<div class="wrapper">
					<a href="https://techmatters.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/12/Tech-Matters.jpg" style="width: 140px;" alt=""></a>
                </div>
				<div class="wrapper">
					<a href="https://witness.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2020/11/WITNESS_2019_LOGO_FOUR_500px.png" style="width: 120px;" alt=""></a>
                </div>
			</div>

            <div class="partner-section">
                <span>
                    <?php echo __('Founding Supporter', 'EDT'); ?>
                </span>
            </div>
            <div class="partner partners">
                <div class="wrapper">
					<a href="https://www.mcgovern.org/" target="_blank"><img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/05/PJM.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>


    <div class="landing-posts">
        <div class="landing-posts-inner">
            <h1><?php echo __('Recent Blog Posts', 'EDT'); ?></h1>
            <div class="posts">
                <?php
                if($the_query->have_posts()) :
                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="post">
                            <div class="image">
                                <a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"/></a>
                            </div>

                            <div class="content">
                                <span class="date"><?php echo get_the_date(); ?></span>
                                <span class="title"><?php echo get_the_title(); ?></span>
                            </div>
                        </div>
                    <?php endwhile;

                else: ?>
                    <p><?php echo __('Sorry, no posts matched your criteria.', 'EDT'); ?></p>
                <?php endif; ?>
            </div>

            <button class="show-all-button"><a href="/blog?lang=<?php echo apply_filters( 'wpml_current_language', NULL ); ?>"><?php echo __('See All Posts', 'EDT'); ?></a></button>
        </div>
    </div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function(){
	  jQuery('.carousel-for-featuredtool').slick({
		  infinite: true,
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  speed: 350,
		  autoplay: false,
  	      autoplaySpeed: 5000,
		  dots: false,
		  arrows: true,
		  prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
		  nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>'
	  });
	});
</script>


<?php
get_footer();
