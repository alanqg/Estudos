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
                    <h1>Serviços</h1>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="item">
                            <?php 
								if( is_active_sidebar( 'services-1' )){
									dynamic_sidebar( 'services-1' );
								}

								?>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="item">
                            <?php 
								if( is_active_sidebar( 'services-2' )){
									dynamic_sidebar( 'services-2' );
								}

								?>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="item">
                            <?php 
								if( is_active_sidebar( 'services-3' )){
									dynamic_sidebar( 'services-3' );
								}

								?>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--Finalizando serviços-->

            <!--Conteudo lateral-->
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                    
                        <?php get_sidebar( 'home' ); ?><!--Tag aside movida para o arquivo sidebar 1-->
        
                      <div class="news col-md-8">
                        <!--Nova linda com mais dus colunas para posts lateral á sidebar-->
                        <div class="container">
                            <h1>Últimas Notícias</h1>
                            <div class="row">
                                <?php 
                                /*Chaamnda via wp query duas categorias chamada feita pelo  ID conteúdo que ser´recuparado*/
                                    $destaque = new WP_Query('post_type=post&posts_per_page=1&cat=26,18'); 

                                    /*Recuparando o contúdo acima com o loop do wp*/
                                    /*Variável destaque pega todas as informações passado*/
                                    if(  $destaque->have_posts() ) :
                                        while( $destaque->have_posts() ) : $destaque->the_post();
                                ?>
                                
                                <!--Chamando o modelo para os posts baixo de serviços da homepage-->
                                <div class="col-12">
                                    <?php get_template_part('templates-parts/content-destaque');?>
                                </div>

                                <?php
                                    endwhile;
                                    //Comando para zera a consulta acima é voltar ao loop original
                                    wp_reset_postdata();        
                            
                                endif;
                                ?>

                            </div>
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