<article>
     <h2><?php the_title(); ?></h2>
       <!--Chamada da miniatura de imagens para posts os arguntos array são para personalizar o tamanho da imagem-->
        <?php the_post_thumbnail( array(275, 275) ); ?>
          <p>Published in <?php echo get_the_date(); ?>  by <?php the_author_posts_link(); ?> </p>
            <!-- o argumento usado no the_caegory ( ' ' ) para dar espaço quando tiver mais de uma categoria-->
           <p>Categories: <?php the_category( ' ' ); ?></p>
        <!--Primeiro argumento será um o nome tag com os dois pontos, já o segundo argumento é a virgula é para separa uma tag da outra -->
        <p><?php the_tags('Tags:', ','); ?></p>

    <!--Função chamará o conteúdo do post-->
    <?php the_content(); ?>

</article>