<?php

// [one_twelves]
function content_grid_1($params = array(), $content = null) {	
	$content = do_shortcode($content);
	$one_twelves = '<div class="content_grid_1">'.$content.'</div>';
	return $one_twelves;
}

add_shortcode('one_twelves', 'content_grid_1');