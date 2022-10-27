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
                        <?php

                            $tamanho = 'col-md-12';
                            $op_content = 'destaque';

                            $itens = get_categories(array('include' => '8, 9, 7'));
                            //echo '<pre>';
                            //print_r($itens);
                            //echo '</pre>';

                            //Criando uma estrutura de repetição para mostras as categorias
                            foreach($itens as $item ):
                            
                                //Estrutura de WP_Query
                                $args = array(
                                    'category__in' => $item->cat_ID,
                                    //Quantidade de posts por vez
                                    'posts_per_page' => 1
                                );

                                $consultas = new WP_Query($args);

                                if($consultas->have_posts()):
                                    while($consultas->have_posts()):
                                        $consultas->the_post();
                                        ?>

                                        <div class="<?php echo  $tamanho; ?>">
                                            <!--Primeiro loop-->
                                            <?php  get_template_part('content', $op_content ); ?>
                                        </div>

                                        <?php 
                                       $tamanho = 'col-md-6';
                                       $op_content = 'secundaria';
                                    endwhile;
                                        wp_reset_postdata();
                                endif;

                            endforeach;
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