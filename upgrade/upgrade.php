<?php
/**
 * Functions for users wanting to upgrade to premium
 *
 * @package robotTheme
 */

/**
 * Display the upgrade to Premium page & load styles.
 */
function robotTheme_premium_admin_menu() {
    global $robotTheme_upgrade_page;
    $robotTheme_upgrade_page = add_theme_page(
    	__( 'robotTheme Premium', 'robotTheme' ),
    	'<span class="premium-link" style="color: #f18500;">'. __( 'robotTheme Premium', 'robotTheme' ) .'</span>',
    	'edit_theme_options',
    	'premium_upgrade',
    	'robotTheme_render_upgrade_page'
	);
}
add_action( 'admin_menu', 'robotTheme_premium_admin_menu' );

/**
 * Enqueue admin stylesheet only on upgrade page.
 */
function robotTheme_load_upgrade_page_scripts( $hook ) {
    global $robotTheme_upgrade_page;
    if ( $hook != $robotTheme_upgrade_page ) {
		return;
    }
    
    wp_enqueue_style( 'robotTheme-upgrade-body-font-default', '//fonts.googleapis.com/css?family=Lato:400,400italic', array(), robotTheme_THEME_VERSION );
    wp_enqueue_style( 'robotTheme-upgrade-heading-font-default', '//fonts.googleapis.com/css?family=Montserrat:700', array(), robotTheme_THEME_VERSION );
    wp_enqueue_style( 'robotTheme-upgrade', get_template_directory_uri() .'/upgrade/library/css/upgrade.css', array(), robotTheme_THEME_VERSION );
    wp_enqueue_style( 'robotTheme-font-awesome', get_template_directory_uri().'/library/fonts/font-awesome/css/font-awesome.css', array(), '4.2.0' );
    wp_enqueue_script( 'robotTheme-caroufredsel-js', get_template_directory_uri() .'/library/js/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), robotTheme_THEME_VERSION, true );
    wp_enqueue_script( 'robotTheme-upgrade-custom-js', get_template_directory_uri() .'/upgrade/library/js/upgrade.js', array( 'jquery' ), robotTheme_THEME_VERSION, true );
}
add_action( 'admin_enqueue_scripts', 'robotTheme_load_upgrade_page_scripts' );

/**
 * Render the premium upgrade/order page
 */
function robotTheme_render_upgrade_page() {

	if ( isset( $_GET['action'] ) ) {
		$action = $_GET['action'];
	} else {
		$action = 'view-page';
	}

	switch ( $action ) {
		case 'view-page':
			get_template_part( 'upgrade/library/template-parts/content', 'upgrade' );
			break;
	}
}
