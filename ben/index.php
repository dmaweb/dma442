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
    <h2>Testimonials</h2>
<?php $loop = new WP_Query( array( 'post_type' => 'testimonials', 'posts_per_page' => 5 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php the_title(); ?>
<?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>

</aside>

<?php get_footer(); ?>