<?php

// [one_third]
function content_grid_4($params = array(), $content = null) {	
	$content = do_shortcode($content);
	$one_third = '<div class="content_grid_4">'.$content.'</div>';
	return $one_third;
}

add_shortcode('one_third', 'content_grid_4');