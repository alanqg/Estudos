<!--Página do contúdo de post padrão-->
<article class="post-padrao">
    <h1><?php the_title(); ?></h1>

    <?php the_post_thumbnail(array(450, 450)); ?>
    <p class="pdetalhes">
        Data de Publicação: <?php echo get_the_date(); ?>
        Autor: <?php the_author(); ?>
    </p>
    <p class="pdetalhes">
        Categorias: <?php the_category(' '); ?>
    </p>
    <p>
        <?php the_tags(' Tags: ', ' ', ' '); ?>
    </p>
    <p>
        <?php the_content(); ?>
    </p>
</article>