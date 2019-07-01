<?php

// [one_fourth]
function content_grid_3($params = array(), $content = null) {	
	$content = do_shortcode($content);
	$one_fourth = '<div class="content_grid_3">'.$content.'</div>';
	return $one_fourth;
}

add_shortcode('one_fourth', 'content_grid_3');