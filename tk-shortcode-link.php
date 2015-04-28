<?php
/*
Plugin Name: TK Shortcode Link
Description: Create links with a shortcode
Author: TourKick
Version: 1.2
Author URI: http://tourkick.com/?utm_source=wordpressdotorg&utm_medium=tkshortcodelinkplugin&utm_content=authoruri&utm_campaign=tkshortcodelinkplugin
License: GPLv2 (or later)
*/

function tklink_shortcode( $atts , $content = null ) {

  // Attributes
	extract( shortcode_atts(
		array(
			'url' => '',
			'target' => '', //e.g. "blank", not "_blank"
			'class' => 'tklink',
		), $atts )
	);

	// Escaping
/*
	$esccontent = esc_html($content); // not used because maybe you want HTML as the content (e.g. image)
	$escurl = esc_html($url); // not used because maybe you want a javascript URL
*/
	$esctarget = esc_html($target);
	$escclass = esc_html($class);

	// Code
	if( empty($url) ){
		if( current_user_can('contributor') ){
			return '<span style="color:red; font-weight:bold;">LINK SHORTCODE without URL attribute. Please remove the shortcode or add a link to resolve.</span>' . $content;
		} else {
			return $content;
		}
	} elseif( empty($esctarget) ){
		return '<a class="' . $escclass . '" href="' . $url . '">' . $content . '</a>';
	} else {
		return '<a class="' . $escclass . '" href="' . $url . '" target="_' . $esctarget . '">' . $content . '</a>';
	}
}
// add_shortcode( 'link', 'tklink_shortcode' );
// conflicted with PageLines Theme ( https://github.com/pagelines/DMS/blob/Dev/includes/class.shortcodes.php#L119 )
add_shortcode( 'tklink', 'tklink_shortcode' ); // does not conflict with PageLines