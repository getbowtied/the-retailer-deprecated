<?php

// [empty_separator]
function shortcode_empty_separator($params = array(), $content = null) {
	extract(shortcode_atts(array(
		'top_space' => '10px',
		'bottom_space' => '30px'
	), $params));
	$empty_separator = '
		<div class="clr"></div><div class="empty_separator" style="margin-top:'.$top_space.';margin-bottom:'.$bottom_space.'"></div><div class="clr"></div>
	';
	return $empty_separator;
}

add_shortcode('empty_separator', 'shortcode_empty_separator');