                <article>
                     <!--Mostrando o conteúdo, como titulo contenúdo do post autor etc...-->
                     <!--Estrutura dos posts que ira motrar -->
                    <h1 class="format-image-h1"><?php the_title(); ?></h1> <!--Comando para mostrar o tipo de post-->
                    <p>Categorias: <?php the_category(' '); ?></p>
                    <p><?php the_content(); ?></p>   
                </article><!--Parte do contúdo da index.-->