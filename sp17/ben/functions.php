<?php

add_theme_support('post-thumbnails');
add_image_size('banner', 1300, 500, true);
add_image_size('page_bg', 1200, 1200, true);
add_image_size('headshot_small', 200, 200, true);
add_image_size('headshot_large', 400, 400, true);

//enable menus and create a location for our primary menu
register_nav_menus(array('primary' => 'Primary Nav')); 


// Add Widgetized Areas (aka sidebars)
register_sidebar(array(
    'id'         => 'widgets',
    'name' 	=> 'Sidebar widgets'
)); // enable widgets in our theme that can be added to the sidebar area
register_sidebar(array(
    'id' 	=> 'footer-widgets',
    'name' 	=> 'Footer widgets',
)); // enable widgets in our theme that can be added to the footer area


// create testimonials custom post type
	register_post_type('testimonials',
		array(
			'labels' => array(
				'name' => __('Testimonials'),
				'singular_name' => __('testimonial'),
			),
			'public' => true,
			'has_archive' => true,
			'menu_icon' => 'dashicons-format-quote',
			'capability_type' => 'post',
			'rewrite' => true,
		)
	);



add_action('init', 'codex_custom_init');
