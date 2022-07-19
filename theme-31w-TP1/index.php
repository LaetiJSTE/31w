<?php get_header(); ?> 
<h1></h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <?php the_title(); ?>
    <?php endwhile; ?>
<?php endif; ?>    
<?php get_footer(); ?>