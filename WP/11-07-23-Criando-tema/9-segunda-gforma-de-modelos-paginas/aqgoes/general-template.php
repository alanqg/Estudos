<?php
    /*
        Template Name: General Template
    
    */
?>

<?php get_header(); ?>
    
<!--Área do contúdo-->
    <div class="content-area">
        <main>
            <section class="middle-area">
                <div class="container">
                      <div class="general-template">
                        <?php
                        //Tive posts 
                            if( have_posts() ): 
                                //Enquanto tiver posts, mostrar par mim
                                while( have_posts() ): the_post();
                         ?>
                               <!--Aqui será mostrado os posts, essas chamado são com comando para chamar titulos tags, categoria etc, essas tags são chamadas de tampletes tags-->
                                    <article>
                                        <h2><?php the_title(); ?></h2>
                                        <!--Função chamará o conteúdo do post-->
                                        <?php the_content(); ?>
                                    </article>
                         <?php
                            endwhile;
                         else:
                         ?>

                         <p>Não tem post disponível....</p>

                         <?php endif; ?>
                    </div>
                </div>
            </section><!--Finalizando barra lateral é noticias-->
        </main>
    </div>
<?php get_footer(); ?>