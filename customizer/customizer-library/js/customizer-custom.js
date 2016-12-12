/**
 * robotTheme Customizer Custom Functionality
 *
 */
( function( $ ) {
	
	var upgradeButton = '<span class="out_the_box_upgrade"><a href="' + upgrade_button.link + '" class="button" target="_blank">' + upgrade_button.text + '</a></span>';	
	
    $('.preview-notice').prepend(upgradeButton);
    
    $( window ).load( function() {
    	// Show / Hide header options
        var headerLayout = $( '#customize-control-robotTheme-header-layout select' ).val();
        robotTheme_toggle_header_options( headerLayout );
        
        $( '#customize-control-robotTheme-header-layout select' ).on( 'change', function() {
        	headerLayout = $( this ).val();
        	robotTheme_toggle_header_options( headerLayout );
        } );
        
        function robotTheme_toggle_header_options( headerLayout ) {
            if ( headerLayout == 'robotTheme-header-layout-standard' ) {
                $( '#customize-control-robotTheme-show-header-top-bar' ).hide();
                
            } else if ( headerLayout == 'robotTheme-header-layout-centered' ) {
                $( '#customize-control-robotTheme-show-header-top-bar' ).show();
                
            }
        }
    	
    	// Show / Hide slider options
        var sliderType = $( '#customize-control-robotTheme-slider-type select' ).val();
        robotTheme_toggle_slider_options( sliderType );
        
        $( '#customize-control-robotTheme-slider-type select' ).on( 'change', function() {
        	sliderType = $( this ).val();
        	robotTheme_toggle_slider_options( sliderType );
        } );
        
        function robotTheme_toggle_slider_options( sliderType ) {
            if ( sliderType == 'robotTheme-slider-default' ) {
            	$( '#customize-control-robotTheme-slider-plugin-shortcode' ).hide();
                $( '#customize-control-robotTheme-slider-categories' ).show();
                $( '#customize-control-robotTheme-slider-transition-speed' ).show();
                
            } else if ( sliderType == 'robotTheme-slider-plugin' ) {
                $( '#customize-control-robotTheme-slider-categories' ).hide();
                $( '#customize-control-robotTheme-slider-transition-speed' ).hide();
                $( '#customize-control-robotTheme-slider-plugin-shortcode' ).show();
                
            } else {
                $( '#customize-control-robotTheme-slider-categories' ).hide();
                $( '#customize-control-robotTheme-slider-transition-speed' ).hide();
                $( '#customize-control-robotTheme-slider-plugin-shortcode' ).hide();
                
            }
        }

    	// Show / Hide blog options
        var blogArchiveLayout = $( '#customize-control-robotTheme-blog-archive-layout select' ).val();
        robotTheme_toggle_blog_options( blogArchiveLayout );
        
        $( '#customize-control-robotTheme-blog-archive-layout select' ).on( 'change', function() {
        	blogArchiveLayout = $( this ).val();
        	robotTheme_toggle_blog_options( blogArchiveLayout );
        } );
        
        function robotTheme_toggle_blog_options( blogArchiveLayout ) {
            if ( blogArchiveLayout == 'robotTheme-blog-archive-layout-full' ) {
                $( '#customize-control-robotTheme-blog-excerpt-length' ).hide();
                $( '#customize-control-robotTheme-blog-read-more-text' ).hide();
                
            } else if ( blogArchiveLayout == 'robotTheme-blog-archive-layout-excerpt' ) {
                $( '#customize-control-robotTheme-blog-excerpt-length' ).show();
                $( '#customize-control-robotTheme-blog-read-more-text' ).show();
                
            }
        }        
        
    } );
    
} )( jQuery );