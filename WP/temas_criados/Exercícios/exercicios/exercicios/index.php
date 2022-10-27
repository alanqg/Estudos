
<?php get_header(); ?>
    <?php
        if(have_posts()) : 
            while(have_posts()) : the_post();
            /*
            Chamando o conteúdo do loop nessa blogo*/
            /*Nesse exemplo será, primeiro a chamada dos posts paddão, depois a chamada para os modelos de posts
            */
            get_template_part(/*Modelo de post padrão*/'content', /*outros modelos de posts*/ get_post_format());
        endwhile;
    ?>

    <?php else: ?>
        <p>Se tiver algo mostra</p>
        <?php endif; ?>

<?php get_footer(); ?>