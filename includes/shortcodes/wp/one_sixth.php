<?php

// [one_sixth]
function content_grid_2($params = array(), $content = null) {	
	$content = do_shortcode($content);
	$one_sixth = '<div class="content_grid_2">'.$content.'</div>';
	return $one_sixth;
}

add_shortcode('one_sixth', 'content_grid_2');