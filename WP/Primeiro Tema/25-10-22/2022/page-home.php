<?php get_header(); ?>
    <?php
        if(have_posts()) :
          while (have_posts()) : the_post();
          get_template_part('content', 'home');
        endwhile;
    ?>

    <?php else: ?>
        <p>Não não tem nada para mostrar</p>

    <?php endif; ?>

<?php get_footer(); ?>