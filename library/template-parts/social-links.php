<ul class="social-links">
<?php
if( get_theme_mod( 'robotTheme-social-email', '' ) != '' ) :
    echo '<li><a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'robotTheme-social-email' ), 1 ) ) . '" title="' . esc_attr( __( 'Send us an email', 'robotTheme' ) ) . '" class="social-email"><i class="fa fa-envelope-o"></i></a></li>';
endif;

if( get_theme_mod( 'robotTheme-social-skype', '' ) != '' ) :
    echo '<li><a href="skype:' . esc_html( get_theme_mod( 'robotTheme-social-skype' ) ) . '?userinfo" title="' . esc_attr( __( 'Contact us on Skype', 'robotTheme' ) ) . '" class="social-skype"><i class="fa fa-skype"></i></a></li>';
endif;

if( get_theme_mod( 'robotTheme-social-tumblr', '' ) != '' ) :
    echo '<li><a href="' . esc_url( get_theme_mod( 'robotTheme-social-tumblr' ) ) . '" target="_blank" title="' . esc_attr( __( 'Find us on Tumblr', 'robotTheme' ) ) . '" class="social-tumblr"><i class="fa fa-tumblr"></i></a></li>';
endif;

if( get_theme_mod( 'robotTheme-social-flickr', '' ) != '' ) :
    echo '<li><a href="' . esc_url( get_theme_mod( 'robotTheme-social-flickr' ) ) . '" target="_blank" title="' . esc_attr( __( 'Find us on Flickr', 'robotTheme' ) ) . '" class="social-flickr"><i class="fa fa-flickr"></i></a></li>';
endif;

if( get_theme_mod( 'robotTheme-header-search', true ) ) :
	echo '<li><i class="fa fa-search search-btn"></i></li>';
endif;
?>
</ul>