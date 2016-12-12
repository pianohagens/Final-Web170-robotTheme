<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Demo
 */

function robotTheme_customizer_library_options() {
	// Theme defaults
	$primary_color = '#006489';
	$secondary_color = '#3F84A4';
	$footer_color = '#EAF1F7';
    
    $body_font_color = '#58585A';
    $heading_font_color = '#006489';

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;
	
	// Site Identity
	$section = 'title_tagline';
	
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Site Identity', 'robotTheme' ),
		'priority' => '25'
	);
	
	if ( ! function_exists( 'has_custom_logo' ) ) {	
		$options['robotTheme-logo'] = array(
			'id' => 'robotTheme-logo',
			'label'   => __( 'Logo', 'robotTheme' ),
			'section' => $section,
			'type'    => 'image'
		);	
	}
	
    // Layout Settings
    $section = 'robotTheme-layout';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Layout', 'robotTheme' ),
        'priority' => '30'
    );
    
    $options['robotTheme-layout-woocommerce-shop-full-width'] = array(
    	'id' => 'robotTheme-layout-woocommerce-shop-full-width',
    	'label'   => __( 'Full width WooCommerce Shop page', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'checkbox',
    	'default' => 0
    );
        
    // Header Settings
    $section = 'robotTheme-header';
    
    $sections[] = array(
    	'id' => $section,
    	'title' => __( 'Header', 'robotTheme' ),
    	'priority' => '35'
    );
    $choices = array(
    	'robotTheme-header-layout-standard' => 'Standard',
    	'robotTheme-header-layout-centered' => 'Centered'
    );
    $options['robotTheme-header-layout'] = array(
    	'id' => 'robotTheme-header-layout',
    	'label'   => __( 'Layout', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'select',
    	'choices' => $choices,
    	'default' => 'robotTheme-header-layout-standard'
    );
        
    $options['robotTheme-show-header-top-bar'] = array(
    	'id' => 'robotTheme-show-header-top-bar',
    	'label'   => __( 'Show Top Bar', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'checkbox',
    	'default' => 1
    );
    $options['robotTheme-header-info-text'] = array(
    	'id' => 'robotTheme-header-info-text',
    	'label'   => __( 'Info Text', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'text',
    	'default' => __( '<strong><em>CALL US:</em></strong> 555-robotTheme', 'robotTheme')
    );
    $options['robotTheme-header-shop-links'] = array(
    	'id' => 'robotTheme-header-shop-links',
    	'label'   => __( 'Shop Links', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'checkbox',
    	'default' => 1,
		'description' => __( 'Display the My Account and Checkout links when WooCommerce is active.', 'robotTheme' )
    );
    $options['robotTheme-header-search'] = array(
    	'id' => 'robotTheme-header-search',
    	'label'   => __( 'Show Search', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'checkbox',
    	'default' => 1
    );

    
    // Social Settings
    $section = 'robotTheme-social';
    
    $sections[] = array(
    	'id' => $section,
    	'title' => __( 'Social Media Links', 'robotTheme' ),
    	'priority' => '35'
    );
    
    $options['robotTheme-social-email'] = array(
    	'id' => 'robotTheme-social-email',
    	'label'   => __( 'Email Address', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'text'
    );
    $options['robotTheme-social-skype'] = array(
    	'id' => 'robotTheme-social-skype',
    	'label'   => __( 'Skype Name', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'text'
    );
    
    $options['robotTheme-social-tumblr'] = array(
    	'id' => 'robotTheme-social-tumblr',
    	'label'   => __( 'Tumblr', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'text'
    );
    $options['robotTheme-social-flickr'] = array(
    	'id' => 'robotTheme-social-flickr',
    	'label'   => __( 'Flickr', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'text'
    );
    
    
    // Search Settings
    $section = 'robotTheme-search';
    
    $sections[] = array(
    	'id' => $section,
    	'title' => __( 'Search', 'robotTheme' ),
    	'priority' => '35'
    );
    
    $options['robotTheme-search-placeholder-text'] = array(
    	'id' => 'robotTheme-search-placeholder-text',
    	'label'   => __( 'Default Search Input Text', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'text',
    	'default' => __( 'Search...', 'robotTheme' )
    );    

    $options['robotTheme-website-text-no-search-results-heading'] = array(
    	'id' => 'robotTheme-website-text-no-search-results-heading',
    	'label'   => __( 'No Search Results Heading', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'text',
    	'default' => __( 'Nothing Found!', 'robotTheme')
    );
    $options['robotTheme-website-text-no-search-results-text'] = array(
    	'id' => 'robotTheme-website-text-no-search-results-text',
    	'label'   => __( 'No Search Results Message', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'textarea',
    	'default' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'robotTheme')
    );
    
    
    // Mobile Menu Settings
    $section = 'robotTheme-mobile-menu';
    
    $sections[] = array(
    	'id' => $section,
    	'title' => __( 'Mobile Menu', 'robotTheme' ),
    	'priority' => '35'
    );
    
    
    // Slider Settings
    $section = 'robotTheme-slider';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Slider', 'robotTheme' ),
        'priority' => '35'
    );
    
    $choices = array(
        'robotTheme-slider-default' => 'Default Slider',
        'robotTheme-slider-plugin' => 'Slider Plugin',
        'robotTheme-no-slider' => 'None'
    );
    $options['robotTheme-slider-type'] = array(
        'id' => 'robotTheme-slider-type',
        'label'   => __( 'Choose a Slider', 'robotTheme' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'robotTheme-no-slider'
    );
	
	$options['robotTheme-slider-categories'] = array(
		'id' => 'robotTheme-slider-categories',
		'label'   => __( 'Select Categories', 'robotTheme' ),
		'section' => $section,
		'type'    => 'dropdown-categories',
		'description' => __( 'Select the categories of the posts you want to display in the slider. The featured image will be the slide image and the post content will display over it. Hold down the Ctrl (windows) / Command (Mac) button to select multiple categories.', 'robotTheme' )
	);
	
    $options['robotTheme-slider-transition-speed'] = array(
    	'id' => 'robotTheme-slider-transition-speed',
    	'label'   => __( 'Slide Transition Speed', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'text',
    	'default' => 450,
    	'description' => __( 'The speed it takes to transition between slides in milliseconds. 1000 milliseconds equals 1 second.', 'robotTheme' )
    );
    
    $options['robotTheme-slider-plugin-shortcode'] = array(
    	'id' => 'robotTheme-slider-plugin-shortcode',
    	'label'   => __( 'Slider Shortcode', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'text',
    	'description' => __( 'Enter the shortcode given by the slider plugin you\'re using.', 'robotTheme' )
    );

    
	// Header Image
	$section = 'header_image';
	
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Header Image', 'robotTheme' ),
		'priority' => '35'
	);

    $options['robotTheme-header-image-text'] = array(
		'id' => 'robotTheme-header-image-text',
        'label'   => __( 'Text', 'robotTheme' ),
        'section' => $section,
        'type'    => 'textarea'
    );
	
    
	// Colors
    $section = 'colors';
    $font_choices = customizer_library_get_font_choices();
    
    $sections[] = array(
    	'id' => $section,
    	'title' => __( 'Colors', 'robotTheme' ),
    	'priority' => '25'
    );    

	$options['robotTheme-primary-color'] = array(
		'id' => 'robotTheme-primary-color',
		'label'   => __( 'Primary Color', 'robotTheme' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $primary_color
	);
	$options['robotTheme-secondary-color'] = array(
		'id' => 'robotTheme-secondary-color',
		'label'   => __( 'Secondary Color', 'robotTheme' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $secondary_color
	);
    
    $options['robotTheme-footer-color'] = array(
    	'id' => 'robotTheme-footer-color',
    	'label'   => __( 'Footer Color', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'color',
    	'default' => $footer_color
    );
    
    
    // Font Settings
	$section = 'robotTheme-fonts';
    $font_choices = customizer_library_get_font_choices();
    
    $sections[] = array(
    	'id' => $section,
    	'title' => __( 'Fonts', 'robotTheme' ),
    	'priority' => '25'
    );
    
    $options['robotTheme-site-title-font'] = array(
    	'id' => 'robotTheme-site-title-font',
    	'label'   => __( 'Site Title Font', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'select',
    	'choices' => $font_choices,
    	'default' => 'Kaushan Script'
    );
    
    $options['robotTheme-heading-font'] = array(
    	'id' => 'robotTheme-heading-font',
    	'label'   => __( 'Heading Font', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'select',
    	'choices' => $font_choices,
    	'default' => 'Raleway'
    );
    $options['robotTheme-heading-font-color'] = array(
    	'id' => 'robotTheme-heading-font-color',
    	'label'   => __( 'Heading Font Color', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'color',
    	'default' => $heading_font_color
    );
    
    $options['robotTheme-body-font'] = array(
    	'id' => 'robotTheme-body-font',
    	'label'   => __( 'Body Font', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'select',
    	'choices' => $font_choices,
    	'default' => 'Lato'
    );
    $options['robotTheme-body-font-color'] = array(
    	'id' => 'robotTheme-body-font-color',
    	'label'   => __( 'Body Font Color', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'color',
    	'default' => $body_font_color
    );
    
    
    // Blog Settings
    $section = 'robotTheme-blog';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Blog', 'robotTheme' ),
        'priority' => '50'
    );

    $choices = array(
		'robotTheme-blog-archive-layout-full' => 'Full Post',
		'robotTheme-blog-archive-layout-excerpt' => 'Post Excerpt'
    );
    $options['robotTheme-blog-archive-layout'] = array(
        'id' => 'robotTheme-blog-archive-layout',
        'label'   => __( 'Archive Layout', 'robotTheme' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'robotTheme-blog-archive-layout-full'
    );
    
    $options['robotTheme-blog-excerpt-length'] = array(
    	'id' => 'robotTheme-blog-excerpt-length',
    	'label'   => __( 'Excerpt Length', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'text',
    	'default' => 55
    );
    
    $options['robotTheme-blog-read-more-text'] = array(
    	'id' => 'robotTheme-blog-read-more-text',
    	'label'   => __( 'Read More Text', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'text',
    	'default' => 'Read More'
    );
    
    // Site Text Settings
    $section = 'robotTheme-website';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Website Text', 'robotTheme' ),
        'priority' => '50'
    );
    $options['robotTheme-website-text-404-page-heading'] = array(
    	'id' => 'robotTheme-website-text-404-page-heading',
    	'label'   => __( '404 Page Heading', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'text',
    	'default' => __( '404!', 'robotTheme')
    );
    $options['robotTheme-website-text-404-page-text'] = array(
    	'id' => 'robotTheme-website-text-404-page-text',
    	'label'   => __( '404 Page Message', 'robotTheme' ),
    	'section' => $section,
    	'type'    => 'textarea',
    	'default' => __( 'The page you were looking for cannot be found!', 'robotTheme')
    );

        
	// Adds the sections to the $options array
	$options['sections'] = $sections;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'robotTheme_customizer_library_options' );
