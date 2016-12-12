<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package robotTheme
 */
?>

</div><!-- #content open tag locate at header.php---------->
<!----footer start here---------->

<footer id="colophon" class="site-footer" role="contentinfo">
 <?php
/** * This is a fallback sidebar
 
/********** Start footer1 **********/
if ( ! is_active_sidebar( 'footer1' ) ) {
?>
	<div id="footer1" class="widget-area" role="complementary">
		<div class="notice">
			<?php _e( 'Add widgets to the Sidebar at Appearance > Widgets', 'robotTheme' ); ?>
		</div>
	</div>
<?php	
	return;
} else {
?>
	<div id="footer1" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer1' ); ?>
	</div><!-- #1 -->
<?php
        

}
/**********End footer1 **********/

/********** Start footer2 **********/
if ( ! is_active_sidebar( 'footer2' ) ) {
?>
	<div id="footer2" class="widget-area" role="complementary">
		<div class="notice">
			<?php _e( 'Add widgets to the Sidebar at Appearance > Widgets', 'robotTheme' ); ?>
		</div>
	</div>
<?php	
	return;
} else {
?>
	<div id="footer2" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer2' ); ?>
	</div><!-- #2 -->
<?php
}
/**********End footer2 **********/
/********** Start footer3 **********/
if ( ! is_active_sidebar( 'footer3' ) ) {
?>
	<div id="footer3" class="widget-area" role="complementary">
		<div class="notice">
			<?php _e( 'Add widgets to the Sidebar at Appearance > Widgets', 'robotTheme' ); ?>
		</div>
	</div>
<?php	
	return;
} else {
?>
	<div id="footer3" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer3' ); ?>
	</div><!-- 3 -->
<?php
}
/**********End footer3 **********/

/********** Start footer4 **********/
if ( ! is_active_sidebar( 'footer4' ) ) {
?>
	<div id="footer4" class="widget-area" role="complementary">
		<div class="notice">
			<?php _e( 'Add widgets to the Sidebar at Appearance > Widgets', 'robotTheme' ); ?>
		</div>
	</div>
<?php	
	return;
} else {
?>
	<div id="footer4" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer4' ); ?>
	</div><!-- #4 -->
<?php
}
/**********End footer4 **********/

/********** Start footer5 **********/
if ( ! is_active_sidebar( 'footer5' ) ) {
?>
	<div id="footer5" class="widget-area" role="complementary">
		<div class="notice">
			<?php _e( 'Add widgets to the Sidebar at Appearance > Widgets', 'robotTheme' ); ?>
		</div>
	</div>
<?php	
	return;
} else {
?>
	<div id="footer5" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'footer5' ); ?>
	</div><!-- #5 -->
<?php
}
/**********End footer2 **********/


?>   

</footer><!-- #colophon -->

<div id="footerInfo" class="footer-extra">
<div class="site-info">
&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url');?>">Piano Hagens </a>. All rights reserved.
</div><!-- .site-info -->
    

</div><!-- #footerInfo ---------->	




	




</body>
</html>