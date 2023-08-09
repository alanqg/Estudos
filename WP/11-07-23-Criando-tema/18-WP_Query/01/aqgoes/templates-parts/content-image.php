<article <?php post_class(); ?>><!--O comando php adionar novas class para estilos css nos posts para imagens-->
     <h2><?php the_title(); ?></h2> <!--Chamada do titulos dos posts -->
       <!--Chamada da miniatura de imagens para posts os arguntos array são para personalizar o tamanho da imagem-->
        <?php the_post_thumbnail( array(275, 275) ); ?> <!--Imagem de destaque dos posts -->
        <div class="meta-info">
         <?php the_author_posts_link(); ?> </p> <!--Data dos posts é as categorias -->
            <!-- o argumento usado no the_caegory ( ' ' ) para dar espaço quando tiver mais de uma categoria-->
           <p>Categories: <?php the_category( ' ' ); ?></p> <!-- Chamada para as categorias-->
          <!--Primeiro argumento será um o nome tag com os dois pontos, já o segundo argumento é a virgula é para separa uma tag da outra -->
          <p><?php the_tags('Tags:', ','); ?></p> <!-- Chamda para as tags dos posts -->
        </div>
    <!--Função chamará o conteúdo do post-->
    <?php the_content(); ?><!--Chamada para o conteudo do posts.-->

</article>