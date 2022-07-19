<?php get_header(); ?> 
<section class="site__main ">
<!--<h1>SIGle</h1>-->

<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
      <div class="single ">  <h2><?php the_title(); ?></h2>
        <p ><?php the_content(); ?></p></div>  
        <?php
          $titre = get_the_title();
          $sigle = substr($titre,0,8);
          $heure = substr($titre,-6);

        ?>
        <code><?= $sigle ?></code>
        <code><?= $heure ?></code>



    <?php endwhile; ?>
<?php endif; ?>  

</section>
<?php get_footer(); ?>