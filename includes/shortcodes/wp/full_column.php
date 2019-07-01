<?php

// [full_column]
function content_grid_12($params = array(), $content = null) {	
	$content = do_shortcode($content);
	$full_column = '<div class="content_grid_12 clr">'.$content.'</div>';
	return $full_column;
}

add_shortcode('full_column', 'content_grid_12');