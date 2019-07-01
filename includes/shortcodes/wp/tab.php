<?php

// [tab]
function tab( $params, $content = null) {
	extract(shortcode_atts(array(
			'title' => ''
	), $params));
	
	$x = $GLOBALS['tab_count'];
	$GLOBALS['tabs'][$x] = array( 'title' => sprintf( $title, $GLOBALS['tab_count'] ), 'content' =>  $content );
	$GLOBALS['tab_count']++;
}

add_shortcode('tab', 'tab');