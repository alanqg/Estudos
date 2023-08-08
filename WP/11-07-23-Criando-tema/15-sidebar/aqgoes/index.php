
<?php get_header(); ?>

<!--chamada do personalização do cabecalho-->
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
<!--Área do contúdo-->
    <div class="content-area">
        <main>            
            <!--Conteudo lateral-->
            <section class="middle-area">
                <div class="container">
                    <div class="row">      
                        <div class="news col-md-8">
                        <?php
                        //Tive posts 
                            if( have_posts() ): 
                                //Enquanto tiver posts, mostrar par mim
                                while( have_posts() ): the_post();
                         ?>
                               <!--Aqui será mostrado os posts, essas chamado são com comando para chamar titulos tags, categoria etc, essas tags são chamadas de tampletes tags-->

                                <?php get_template_part( 'templates-parts/content', get_post_format() ); ?> <!--Primeiro paramentro é o nome do aquivo sem extessão .php-->

                         <?php
                            endwhile;
                         else:
                         ?>

                         <p>Não tem post disponível....</p>

                         <?php endif; ?>
                            
                      </div>
                      <?php get_sidebar('blog'); ?> <!-- atag aside Removido para o arquivo sidebar-home-->
                    </div>
                </div>
            </section><!--Finalizando barra lateral é noticias-->
        </main>
    </div>
<?php get_footer(); ?>