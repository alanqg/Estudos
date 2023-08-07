<article>
   <?php the_title(); ?>
   <!--Tamanho da imagens do posts na página blog-->
   <?php the_post_thumbnail(array( 275, 275) ); ?>
   <p>Publicado em: <?php echo get_the_date(); ?> Por: <?php the_author_posts_link(); ?></p>
   <p>Categorias: <?php the_category( ' ' ); ?></p>
   <p><?php the_tags( 'Tag:', ', ' ); ?></p>
   <?php the_content(); ?>
</article>