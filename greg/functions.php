<?php

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

