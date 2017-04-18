<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>
  <nav>

  
    <?php wp_nav_menu(array(
	'theme_location'	=> 'primary',
	'container'				=> 'nav',
	'container_id'		=> 'menu',
        'container_class' => 'container nav-container'
    ));
    // This block above displays the primary menu. We can manage these links in the WP-Admin>Appearance>Menus.
    ?>
    
    
    
    
   </nav>