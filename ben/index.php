<?php get_header(); ?>
  
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

<aside>
    <?php dynamic_sidebar('widgets'); ?>
</aside>

<?php get_footer(); ?>