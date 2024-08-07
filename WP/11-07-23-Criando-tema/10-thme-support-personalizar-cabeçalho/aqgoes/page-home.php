<!--P-agina especifica para a página home do site.-->

<?php get_header(); ?>
    
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

                               <p>Página home</p>
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