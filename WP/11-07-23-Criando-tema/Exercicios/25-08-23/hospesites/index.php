<?php get_header(); ?>
    <?php
        if( have_posts() ):
            while(have_posts() ): the_post(); 
    ?>
    <p>Template parte </p>
    <?php endwhile;
        else:
        ?>
        <p>Nada para mostrar</p>
        <?php endif; ?>
<?php get_footer(); ?>