<?php 
/*
Plugin Name: VP Scrollbar Wordpress
Plugin URI: http://virtualproducts.org/scrollbar/
Description: This plugin will be change side bar of your website.
Author: Virtual Products
Author URI: http://virtualproducts.org
Version: 1.1
*/



/* Adding Latest jQuery from Wordpress */
function vp_nice_scrollbar_wp_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'vp_nice_scrollbar_wp_latest_jquery');

/*Some Set-up*/
define('VP_nice_SCROLL_BAR_WP', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );

wp_enqueue_script('vp-nice-scrollbar-main', VP_nice_SCROLL_BAR_WP.'js/jquery.nicescroll.min.js', array('jquery'));

wp_enqueue_style('vp-nice-custom-scrollbar-css', VP_nice_SCROLL_BAR_WP.'css/custom-scrollbar.css');




function vp_nice_scrollbar_wp_active(){?>


<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery("html").niceScroll({
			cursorcolor: "#569FF3",
			cursorwidth: "10px",
			cursorborderradius: "0px",
			cursorborder: "0px solid #000",
			scrollspeed: "60",
			autohidemode: false,
			touchbehavior: true,
			bouncescroll: false,
			horizrailenabled: false
		});           
	});	
</script>
<?php
}
add_action ('wp_head','vp_nice_scrollbar_wp_active')


?>