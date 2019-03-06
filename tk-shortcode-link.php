<?php
/*
Plugin Name: TK Shortcode Link
Description: Create links with a shortcode
Author: TourKick
Version: 1.2.1
Author URI: https://tourkick.com/?utm_source=wordpressdotorg&utm_medium=tkshortcodelinkplugin&utm_content=authoruri&utm_campaign=tkshortcodelinkplugin
License: GPL version 3 or any later version
*/

function tklink_shortcode( $atts, $content = null ) {

  // Attributes
	extract( shortcode_atts(
		array(
			'url' => '',
			'target' => '', //e.g. "blank", not "_blank"
			'class' => 'tklink',
		), $atts )
	);

	$esctarget = esc_html($target);
	$escclass = esc_html($class);

	// Code
	if( empty($url) ){
			return '<span style="color:red; font-weight:bold;">LINK SHORTCODE without URL attribute. Please remove the shortcode or add a link to resolve.</span>' . $content;
		if ( current_user_can( 'edit_posts' ) ) {
		} else {
			return $content;
		}
	} elseif( empty($esctarget) ){
		return '<a class="' . $escclass . '" href="' . $url . '">' . $content . '</a>';
	} else {
		return '<a class="' . $escclass . '" href="' . $url . '" target="_' . $esctarget . '">' . $content . '</a>';
	}
}

add_shortcode( 'tklink', 'tklink_shortcode' );