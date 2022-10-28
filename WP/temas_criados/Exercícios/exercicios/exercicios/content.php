<article>

    <h1><?php the_title(); ?></h1>
    <?php /*tamanho da imagem destacada*/ the_post_thumbnail(array(450, 450));?>
    <p><?php echo get_the_date(); ?></p>
    <p><?php the_content(); ?></p>
</article>