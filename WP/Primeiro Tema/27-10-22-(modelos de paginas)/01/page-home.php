<?php get_header(); ?>
<div class="pedding-top">
    <?php
        if(have_posts()) :
          while (have_posts()) : the_post();
          get_template_part('content', 'home');
        endwhile;
    ?>

    <?php else: ?>
        <p>Não não tem nada para mostrar</p>

    <?php endif; ?>
</div>
<?php get_footer(); ?>