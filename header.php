<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EarthDefendersToolkit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&family=Changa:wght@400;500;700;800&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

	<!-- CAROUSEL -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	<script src="https://kit.fontawesome.com/5393659d7c.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<?php if((!is_front_page() && is_page_template()) || (!is_front_page() && have_posts())): ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'earthdefenderstoolkit' ); ?></a>
<header id="masthead" class="site-header">
    <div class="site-branding">
        <?php
            the_custom_logo();
        ?>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="dashicons dashicons-menu-alt"></span></button>
        <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'earthdefenderstoolkit' ); ?></button> -->
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                )
            );
        ?>
    </nav><!-- #site-navigation -->
</header><!-- #masthead -->

<?php endif; ?>
