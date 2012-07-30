<?php 

	if (function_exists('register_sidebar'))
		register_sidebar(array(
			'name' => 'Sidebar 1',
			'id' => 'sidebar1',
			'before_widget' => '<li class="widgetblock">',
			'after_widget' => '</li>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		));
		register_sidebar(array(
			'name' => 'Sidebar 2',
			'id' => 'sidebar2',
			'before_widget' => '<li class="widgetblock">',
			'after_widget' => '</li>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		));

	function number_of_responses() {
		printf( _n('1 response to "%2$s"', '%1$s responses to "%2$s"', get_comments_number()), get_comments_number(), get_the_title());
	}
	
	add_theme_support('none');
	
	add_theme_support(  'automatic-feed-links' ); 
	
	if ( ! isset( $content_width ) ) $content_width = 900;
?>