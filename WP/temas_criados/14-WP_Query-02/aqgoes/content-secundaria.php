<article class="noticias-segundaria">
     <!--Mostrando o conteúdo, como titulo contenúdo do post autor etc...-->
      
            <div class="miniaturas">
                <!--Chamando miniaturas de imagem com o tamanho de miniaturas-->
                <?php the_post_thumbnail('large', array('class' => 'img-reponsive')); ?>
            </div>
     <!--Estrutura dos posts que ira motrar -->
     <h1><?php the_title(); ?></h1> <!--Comando para mostrar o tipo de post-->                           
      <p>por <span><?php the_author();?></span> em <span><?php the_category(' '); ?></span> <?php the_tags('Tags: ', ', '); ?></p>
        <p><?php the_excerpt(); ?></p>   
 </article><!--Parte do contúdo da index.-->