<?php

// [one_half]
function content_grid_6($params = array(), $content = null) {	
	$content = do_shortcode($content);
	$one_half = '<div class="content_grid_6">'.$content.'</div>';
	return $one_half;
}

add_shortcode('one_half', 'content_grid_6');