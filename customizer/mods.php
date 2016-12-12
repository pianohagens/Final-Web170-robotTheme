<?php
/**
 * Functions used to implement options
 *
 * @package Customizer Library Demo
 */

/**
 * Enqueue Google Fonts Example
 */
function robotTheme_customizer_theme_fonts() {

	// Font options
	$fonts = array(
		get_theme_mod( 'robotTheme-site-title-font', customizer_library_get_default( 'robotTheme-site-title-font' ) ),
		get_theme_mod( 'robotTheme-heading-font', customizer_library_get_default( 'robotTheme-heading-font' ) ),
		get_theme_mod( 'robotTheme-body-font', customizer_library_get_default( 'robotTheme-body-font' ) )
	);

	$font_uri = customizer_library_get_google_font_uri( $fonts );

	// Load Google Fonts
	wp_enqueue_style( 'robotTheme_customizer_theme_fonts', $font_uri, array(), null, 'screen' );

}
add_action( 'wp_enqueue_scripts', 'robotTheme_customizer_theme_fonts' );