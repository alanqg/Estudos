
<?php get_header(); ?>

<!--chamada do personalização do cabecalho-->
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
<!--Área do contúdo-->
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">
                        Slide
                    </div>
                </div>
            </section><!--Finalizando o slide-->
            
            <section class="services">
                <div class="container">
                    <div class="row">
                        Serviços
                    </div>
                </div>
            </section><!--Finalizando serviços-->

            <!--Conteudo lateral-->
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                      <aside class="sidebar col-md-4">BArra Lateral</aside>
                      <div class="news col-md-8">
                        <?php
                        //Tive posts 
                            if( have_posts() ): 
                                //Enquanto tiver posts, mostrar par mim
                                while( have_posts() ): the_post();
                         ?>
                               <!--Aqui será mostrado os posts, essas chamado são com comando para chamar titulos tags, categoria etc, essas tags são chamadas de tampletes tags-->

                                    <article>
                                        <h2><?php the_title(); ?></h2>
                                        <!--Chamada da miniatura de imagens para posts os arguntos array são para personalizar o tamanho da imagem-->
                                        <?php the_post_thumbnail( array(275, 275) ); ?>
                                        <?php ?>
                                        <p>Published in <?php echo get_the_date(); ?>  by <?php the_author_posts_link(); ?> </p>
                                        <!-- o argumento usado no the_caegory ( ' ' ) para dar espaço quando tiver mais de uma categoria-->
                                        <p>Categories: <?php the_category( ' ' ); ?></p>
                                        <!--Primeiro argumento será um o nome tag com os dois pontos, já o segundo argumento é a virgula é para separa uma tag da outra -->
                                        <p><?php the_tags('Tags:', ','); ?></p>

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
                </div>
            </section><!--Finalizando barra lateral é noticias-->

            <!--Área de como chegar mapa localização-->
            <section class="map">
                <div class="container">
                    <div class="row">Mapa</div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>