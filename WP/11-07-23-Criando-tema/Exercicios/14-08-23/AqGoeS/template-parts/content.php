<article <?php post_class(); ?>>
    <!--titulos dos posts para a página blog-->
    <h2><?php the_title(); ?></h2>
    <!--Tamanho da imagem destaque dos post da página blog-->
    <?php the_post_thumbnail(array( 250, 250));  ?>

</article>