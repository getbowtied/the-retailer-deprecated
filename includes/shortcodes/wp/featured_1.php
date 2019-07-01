<?php

// [featured_1]
function shortcode_featured_1($params = array(), $content = null) {
	extract(shortcode_atts(array(
		'image_url' => '',
		'title' => 'Title',
		'button_text' => 'Link button',
		'button_url' => '#'
	), $params));
	
	$content = do_shortcode($content);
	$featured_1 = '		
		<div class="shortcode_featured_1">
			<div class="shortcode_featured_1_img_placeholder"><img src="'.$image_url.'" alt="" /></div>
			<h3>'.$title.'</h3>
			<p>'.$content.'</p>
			<a href="'.$button_url.'">'.$button_text.'</a>
		</div>
	';
	return $featured_1;
}

add_shortcode('featured_1', 'shortcode_featured_1');