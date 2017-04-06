<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ben's Bagels</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>
  <nav>
   <?php wp_list_pages(); ?>
   </nav>
   <h1>
    <?php 
    the_title();
    ?>
    </h1>
    
    <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_content();
	} // end while
} // end if
?>

</body>
</html>