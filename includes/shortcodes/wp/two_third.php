<?php

// [two_third]
function content_grid_2_3($params = array(), $content = null) {	
	$content = do_shortcode($content);
	$two_third = '<div class="content_grid_2_3">'.$content.'</div>';
	return $two_third;
}

add_shortcode('two_third', 'content_grid_2_3');