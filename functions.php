<?php
/**
 * EarthDefendersToolkit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EarthDefendersToolkit
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'earthdefenderstoolkit_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function earthdefenderstoolkit_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on EarthDefendersToolkit, use a find and replace
		 * to change 'earthdefenderstoolkit' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'earthdefenderstoolkit', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'earthdefenderstoolkit' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'earthdefenderstoolkit_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'earthdefenderstoolkit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function earthdefenderstoolkit_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'earthdefenderstoolkit_content_width', 640 );
}
add_action( 'after_setup_theme', 'earthdefenderstoolkit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function earthdefenderstoolkit_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'earthdefenderstoolkit' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'earthdefenderstoolkit' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'earthdefenderstoolkit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function earthdefenderstoolkit_scripts() {

  wp_enqueue_script( 'earthdefenderstoolkit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), mt_rand(10,100), true );

  wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script( 'earthdefenderstoolkit-custom-scripts', get_template_directory_uri() . '/js/scripts.js', array('bootstrap-js'), mt_rand(10,100), true );

	wp_enqueue_script( 'lightbox', "https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js", array('jquery'));
	wp_enqueue_style( 'lightbox-css', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css');

	wp_enqueue_style( 'earthdefenderstoolkit-style-base', get_stylesheet_uri(), array('bootstrap-css'), mt_rand(10, 100) );
	wp_enqueue_style( 'earthdefenderstoolkit-style', get_template_directory_uri() . '/style-edt.css', array('earthdefenderstoolkit-style-base'), mt_rand(10, 100) );
	wp_style_add_data( 'earthdefenderstoolkit-style', 'rtl', 'replace' );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'earthdefenderstoolkit_scripts' );

// Enqueuing Dashicons to use them in frontend
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
    function load_dashicons_front_end() {
    wp_enqueue_style( 'dashicons' );
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Change the custom logo URL
 */
function my_custom_logo_link() {

	// The logo
    $custom_logo_id = get_theme_mod( 'custom_logo' );

    // If has logo
    if ( $custom_logo_id ) {

    	// Attr
	    $custom_logo_attr = array(
			'class'    => 'custom-logo',
			'itemprop' => 'logo',
		);

		// Image alt
		$image_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true );
		if ( empty( $image_alt ) ) {
			$custom_logo_attr['alt'] = get_bloginfo( 'name', 'display' );
		}
		
		$url_lang = 'https://www.earthdefenderstoolkit.com/home?lang=' . apply_filters( 'wpml_current_language', NULL );
	    // Get the image
	    $html = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" itemprop="url">%2$s</a>',
			esc_url( $url_lang ),
			wp_get_attachment_image( $custom_logo_id, 'full', false, $custom_logo_attr )
		);

	}

	// Return
    return $html;   
}
add_filter( 'get_custom_logo', 'my_custom_logo_link' );

// Translated PDF download link for EDT pages
function pdf_download_links() {
	$post_en = apply_filters( 'wpml_object_id', get_the_ID(), 'post', FALSE, 'en' );
	if( have_rows('pdf_link', $post_en) ):
		echo '<div class="pdf-downloads">';
		while( have_rows('pdf_link', $post_en) ): the_row(); 
			$name = get_sub_field('the_name', $post_en);
			$link = get_sub_field('the_link', $post_en);
			echo '<div class="download-wrapper"><div class="pdf-left">';
			echo '<a href="' . $link['url'] . '">';
			echo '<img src="https://www.earthdefenderstoolkit.com/wp-content/uploads/2021/06/dl-icon@2x.png"></a></div><div class="pdf-right">';
			echo '<a href="' . $link['url'] . '">';
			echo '<h3>' . __('Download', 'EDT') . ' PDF</h3>';
			echo '<p>' . $name . '</p></a>';
			echo '</div></div>';
		endwhile;
		echo '</div>';
	endif;
}