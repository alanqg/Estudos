                <article>
                            <!--Mostrando o conteúdo, como titulo contenúdo do post autor etc...-->
                            <!--Estrutura dos posts que ira motrar -->
                            <h1 class="titulo-post-padrao"><?php the_title(); ?></h1> <!--Comando para mostrar o tipo de post-->

                            <!--Chamando miniaturas de imagem com o tamanho de miniaturas-->
                            <?php the_post_thumbnail(array(450, 450)); ?>
                            
                            <p>Publicado em: <?php echo get_the_date(); ?> Por: <?php the_author(); ?></p>
                            <p>Categorias: <?php the_category(' '); ?></p>
                            <p><?php the_tags( 'Tags: ', ' ', ' '); ?></p>
                            <p><?php the_content(); ?></p>   
                </article><!--Parte do contúdo da index.-->