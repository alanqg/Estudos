<?php get_header(); ?>
<main>
        <section class="slider">
            <div class="container">
                <div class="row">
                  Slider
                </div>
            </div>
         </section><!--Slider-->
         
          <section>
            <div class="container">
              <div class="row">
                Serviços
              </div>
            </div>
          </section><!--Finalizando Serviços-->

            <section class="artigos">
                <div class="container">
                    <div class="row">
                        <?php get_sidebar('home'); ?>
                        <div class="col-md-8">
                          <h1>Nossos Artigos</h1>
                          <div class="container">
                          <div class="row">
                              <!--Chamada para a primeira notica com revesando com duas categorias-->
                              <?php
                                $destaque = new WP_Query('post_type=post&posts_per_page=1&cat=8,4');
                                if($destaque->have_posts()):
                                  while( $destaque->have_posts()):  $destaque->the_post();

                              ?>
                                <div class="col-12">
                                  <?php get_template_part('template-parts/content', 'destaque'); ?>
                                </div>
                                <?php endwhile;
                                  wp_reset_postdata();
                                endif;
                                ?>

                                <!--Segunda seção com os posts secudários-->
                                <?php
                                    $args = array(
                                      'post_type' => 'post',
                                      'posts_per_page' => 2,
                                      'category__not_in' => array( 4 ), 
                                      'category__in' => array( 12, 8 ),
                                      'offser' => 1

                                    ); 

                                    $destaquedois = new WP_Query( $args );

                                    if( $destaquedois->have_posts() ): 
                                      while( $destaquedois->have_posts()):        $destaquedois->the_post(); 

                                ?>
                                <div class="col-6">
                                  <?php
                                    get_template_part('template-parts/content', 'destaquedois');
                                  ?>
                                </div>
                                <?php 
                                endwhile;
                                  wp_reset_postdata();
                              endif;
                                ?>
                            </div>
                        </div><!--Finalizando coml-md-8 dentro tem um container uma linha 12 colunas com 6 x 6-->
                    </div>
                </div>
            </section>
</main>
<?php get_footer(); ?>