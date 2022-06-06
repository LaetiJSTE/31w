
<?php get_header(); ?> 
<h1>Mon premier modèle Wordpress</h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <H2><?php the_title(); ?></H2>
        <p><?php the_content(); ?></p>
<?php 
   /*  $contenu = get_the_content();
    echo wp_trim_words($contenu, 20, " ... "); */
    $lien ="<a href='" . get_permalink() . "'>lien</a>";
    echo $lien;
?>

<p><?= wp_trim_words(get_the_content(),20, ''); ?></p>


        
    <?php endwhile; ?>
<?php endif; ?>    

<?php get_footer(); ?>