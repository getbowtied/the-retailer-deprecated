<?php

// [container]
function shortcode_container($params = array(), $content = null) {
	
	$content = do_shortcode($content);
	$container = '		
		<div class="shortcode_container">'.$content.'<div class="clr"></div></div>';
	return $container;
}

add_shortcode('container', 'shortcode_container');