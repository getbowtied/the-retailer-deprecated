<?php

// [tabgroup]
function tabgroup( $params, $content = null ) {
	$GLOBALS['tabs'] = array();
	$GLOBALS['tab_count'] = 0;
	$i = 1;
	$randomid = rand();
	
	extract(shortcode_atts(array(
		'title' => 'Title'
	), $params));

	do_shortcode($content);

	if( is_array( $GLOBALS['tabs'] ) ){
	
		foreach( $GLOBALS['tabs'] as $tab ){	
			$tabs[] = '<li class="tab"><a href="#panel'.$randomid.$i.'">'.$tab['title'].'</a></li>';
			$panes[] = '<div class="panel" id="panel'.$randomid.$i.'"><p>'.do_shortcode($tab['content']).'</p></div>';
			$i++;
		}
		$return = '
		<div class="shortcode_tabgroup">
			<h3>'.$title.'</h3>
			<ul class="tabs">'.implode( "\n", $tabs ).'</ul><div class="panels">'.implode( "\n", $panes ).'</div><div class="clr"></div></div>';
	}
	return $return;
}

add_shortcode( 'tabgroup', 'tabgroup' );