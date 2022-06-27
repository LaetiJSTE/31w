<?php get_header(); ?> 
<section class="site__main">
    <h1>front-page.php Mon premier modèle Wordpress</h1>
    <?php
    if (have_posts()):
        while(have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php $lien = " ... <a class='bouton' href='" 
                    . get_permalink()  
                    . "'>"
                    . substr(get_the_title(),0,8) 
                    ."</a>"; 

    ?>

    <p><?= wp_trim_words(get_the_content(), 20, $lien) ?></p>


        <?php endwhile; ?>
    <?php endif; ?>    
</section>
<?php get_footer(); ?>