<?php get_header(); ?> <!--Cahamndo pedaço do tema header-->


<!--Chamando a imagem do fundo do header-->
<img class="img-responsive"  src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">

    <!--Conteúdo principal-->
    <div class="conteudo"> 
    <main>
            <section class="meio">
                <div class="container">
                <div class="row">

                    <div class="noticias col-md-9">
                    <!--Loop-->
                    <?php
                        //Se houver algum post
                        if(have_posts()) :
                            //Enquanto houver algum , chama o psot de determinada maneira
                            while(have_posts()) : the_post();      
                    ?>
                    <!--Buscando um pedaço de arquivo-->
                    <?php get_template_part('content', get_post_format()); ?>
                    
                    <?php
                        endwhile;
                        else:
                    ?>
                        <!--Se caso não tenha post irá mostrar essa mensagem-->
                        <p>Não nada para mostrar</p>
                    <?php 
                        endif; 
                    ?>
                </div>
                <aside class="barra-lateral col-md-3">
                   <!--Barra da lateral do blog-->
                    <?php  get_sidebar('blog');  ?>
                </aside><!--Lateral do site -->
               </div><!--Notiicas-->
               </div>
            </section><!--Conteudo central é sibedar-->
    </main>

    </div><!--Div que envolve todo o contúdo do site-->
    
 <?php get_footer(); ?> <!--Cahamando o footer->