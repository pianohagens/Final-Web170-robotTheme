<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package robotTheme
 */
global $woocommerce;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 

<header id="masthead" class="site-header <?php echo ( get_theme_mod( 'robotTheme-header-layout', 'robotTheme-header-layout-standard' ) == 'robotTheme-header-layout-centered' ) ? sanitize_html_class( 'robotTheme-header-layout-centered' ) : sanitize_html_class( 'robotTheme-header-layout-standard' ); ?>" role="banner">

    <?php if ( get_theme_mod( 'robotTheme-header-layout', 'robotTheme-header-layout-standard' ) == 'robotTheme-header-layout-centered' ) : ?>
    
        <?php get_template_part( 'library/template-parts/header', 'centered' ); ?>
        
    <?php else : ?>
        
        <?php get_template_part( 'library/template-parts/header', 'standard' ); ?>
        
    <?php endif; ?>

    
</header><!-- #masthead -->

<script>
    var robotThemeSliderTransitionSpeed = parseInt(<?php echo intval( get_theme_mod( 'robotTheme-slider-transition-speed', 450 ) ); ?>);
</script>

<?php if ( is_front_page() && get_theme_mod( 'robotTheme-slider-type', 'robotTheme-no-slider' ) != 'robotTheme-no-slider' ) : ?>
	<?php get_template_part( 'library/template-parts/slider' ); ?>
<?php elseif ( is_front_page() && get_header_image() ) : ?>
	<?php get_template_part( 'library/template-parts/header-image' ); ?>
<?php endif; ?>
   

<div id="content" class="site-content site-container">
            