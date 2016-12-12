<?php global $woocommerce; ?>
    
    <div class="site-top-bar border-bottom">
        
        <div class="site-container">
            
            <?php
            if ( wp_kses_post( get_theme_mod( 'robotTheme-header-info-text', '<strong><em>CALL US:</em></strong> 555-robotTheme' ) ) != "" ) {
            ?>
            <div class="site-top-bar-left">
				<div class="info-text"><?php echo wp_kses_post( get_theme_mod( 'robotTheme-header-info-text', __( '<strong><em>CALL US:</em></strong> 555-robotTheme', 'robotTheme' ) ) ) ?></div>
            </div>
            <?php 
            }
            ?>
            
            <div class="site-top-bar-right">
                
                <?php
                if ( robotTheme_is_woocommerce_activated() && get_theme_mod( 'robotTheme-header-shop-links', true ) ) { ?>
                
		            <?php if ( is_user_logged_in() ) { ?>
		                <div class="site-header-right-link"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="my-account" title="<?php _e('My Account','robotTheme'); ?>"><?php _e('My Account','robotTheme'); ?></a></div>
		            <?php } else { ?>
		                <div class="site-header-right-link"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="my-account" title="<?php _e('Login','robotTheme'); ?>"><?php _e('Sign In / Register','robotTheme'); ?></a></div>
		            <?php } ?>
                    <div class="header-cart">
                        <a class="header-cart-contents" href="<?php echo esc_url( $woocommerce->cart->get_cart_url() ); ?>" title="<?php _e('View your shopping cart', 'robotTheme'); ?>">
                            <span class="header-cart-amount">
                                <?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'robotTheme'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?>
                            </span>
                            <span class="header-cart-checkout<?php echo ( $woocommerce->cart->cart_contents_count > 0 ) ? ' cart-has-items' : ''; ?>">
                                <span><?php _e('Checkout', 'robotTheme'); ?></span> <i class="fa fa-shopping-cart"></i>
                            </span>
                        </a>
                    </div>
                    
                <?php
                } else {
                	get_template_part( 'library/template-parts/social-links' );
                }
                ?>
                
            </div>
            <div class="clearboth"></div>
            
        </div>
    </div>
