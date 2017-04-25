<?php get_header(); ?>
  
  <div class="title">
        <h2>
            
            <?php the_title(); ?>
        </h2>
    </div>
    <div class="directions">
    <?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_content();
		} // end while
	} // end if
?>
        
    </div>


<aside>
    <?php dynamic_sidebar('widgets'); ?>
</aside>

<?php get_footer(); ?>