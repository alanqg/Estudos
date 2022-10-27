<?php get_header(); ?> <!--Cahamndo pedaço do tema header-->

    <!--Conteúdo principal-->
<div class="conteudo">
        
    <main>
            <section class="slider">
                <div class="container">
                <div class="row"></div>
                    Slider
                </div>
                </div>
            </section><!--Finalizando o slider-->

            <section class="servicos">
                <div class="container">
                <div class="row">
                    Serviços
                </div>
                </div>
            </section> <!--Finalizando a seção serviços-->
            
            <section class="meio">
                <div class="container">
                <div class="row">
                    <aside class="barra-lateral col-md-3">
                        <!--A barra lateral-->
                        <?php  get_sidebar('home');  ?>
                    </aside><!--Lateral do site -->
                    <div class="noticias col-md-9">
                    <!--Contúdo da página home-->
                    <!--Chamando os psots da página  home-->
                        <div class="row">
                            <?php
                                //Variavel para chamando o post destaque
                                $destaque = new WP_Query('type_post&posts_per_page=1&cat=8,7'); //Será guardado a categoeria ou remrover para os psots destaque

                                //Desntro da variável destaque tem o conteúdo das categoerias tecnologia é esportes
                                //Chamando o loop WP com o objeto que no caso é a variável destaque
                                if($destaque -> have_posts()) :
                                    while($destaque->have_posts()):
                                        $destaque->the_post();
                                        ?>
                                        <div class="col-md-12">
                                            <!--Chamando parte de template para os psots-->
                                            <?php get_template_part('content', 'destaque'); ?>
                                        </div>

                                        <?php 
                                    endwhile;
                                    //resertar o loop Wp_Query
                                    wp_resert_postdata();
                                endif;
                                

                            ?>
                        </div>         
               </div><!--Notiicas-->
               </div>
               </div>
            </section><!--Conteudo central-->

            <div class="mapa">
            <div class="container">
                <div class="row">
                    Mapa
                </div>
            </div>
            </div><!--Falizado área de mapa-->
</main>
</div><!--Div que envolve todo o contúdo do site-->
    
 <?php get_footer(); ?> <!--Cahamando o footer->