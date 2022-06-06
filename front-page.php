
<?php get_header(); ?> 
<h1>front-page.php Mon premier modèle Wordpress</h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <H2><?php the_title(); ?></H2>   
<?php 
   /*  $contenu = get_the_content();
    echo wp_trim_words($contenu, 20, " ... "); */
    $lien =" ... <a class='bouton' href='" 
            . get_permalink() 
            . "'>"
            . substr(get_the_title(),0,8)  
            ."</a>";
?>

<p><?= wp_trim_words(get_the_content(),20, $lien); ?></p>


        
    <?php endwhile; ?>
<?php endif; ?>    

<?php get_footer(); ?>