<?php get_header(); ?> <!--Cahamndo pedaço do tema header-->

    <!--Conteúdo principal-->
    <div class="conateudo">
        
    <main>
            <section class="slider container">Slider</section>
            <section class="servicos container">Serviços</section>
            <section class="meio container">
                <div class="row">
                    <aside class="barra-lateral col-md-3">Barra lateral</aside><!--Lateral do site -->
                    <div class="noticias col-md-9">
                    
                    <!--Loop-->
                    <?php
                        //Se houver algum post
                        if(have_posts()) :
                            //Enquanto houver algum , chama o psot de determinada maneira
                            while(have_posts()) : the_post();      
                    ?>
                        <!--Mostrando o conteúdo, como titulo contenúdo do post autor etc...-->
                        <!--Estrutura dos posts que ira motrar -->
                        <h1><?php the_title(); ?></h1>
                        <p>Publicado em: <?php echo get_the_date(); ?> Por: <?php the_author(); ?></p>
                        <p>Categorias: <?php the_category(' '); ?></p>
                         <p><?php the_tags( 'Tags: ', ' ', ' '); ?></p>
                         <p><?php the_content(); ?></p>   
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
               </div><!--Notiicas-->
            </section><!--Conteudo central é sibedar-->
            <div class="mapa container">Mapa</div>
    </main>

    </div><!--Div que envolve todo o contúdo do site-->
    
 <?php get_footer(); ?> <!--Cahamando o footer->