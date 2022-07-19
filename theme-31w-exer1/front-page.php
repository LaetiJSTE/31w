<section class="header__test">
<?php get_header(); ?></section>
<section class='site__main '>
    <!--<h1>Mon premier modèle Wordpress</h1> page d'accueil-->
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="main">


                <h2><?php the_title(); ?></h2><br>
                <?php $lien = " ... <a class='bouton' href='"
                    . get_permalink()
                    . "'>"
                    . substr(get_the_title(), 0, 8)
                    . "</a>";

                ?>

                <p><?= wp_trim_words(get_the_content(), 20, $lien) ?></p>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>