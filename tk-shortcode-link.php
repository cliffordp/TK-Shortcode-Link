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

	$defaults = array(
		'url'    => '',
		'target' => '', //e.g. "blank", not "_blank"
		'class'  => 'tklink',
	);

	$atts = shortcode_atts( $defaults, $atts, 'tklink' );

	$target = esc_attr( $atts['target'] );

	$content = esc_html( $content );

	if ( empty( $content ) ) {
		$content = $atts['url'];
	}

	if ( empty( $atts['url'] ) ) {
		if ( current_user_can( 'edit_posts' ) ) {
		} else {
			return $content;
		}
	} elseif ( empty( $target ) ) {
		return '<a class="' . esc_attr( $atts['class'] ) . '" href="' . esc_url( $atts['url'] ) . '">' . $content . '</a>';
	} else {
		return '<a class="' . esc_attr( $atts['class'] ) . '" href="' . esc_url( $atts['url'] ) . '" target="_' . $target . '">' . $content . '</a>';
	}
}

add_shortcode( 'tklink', 'tklink_shortcode' );