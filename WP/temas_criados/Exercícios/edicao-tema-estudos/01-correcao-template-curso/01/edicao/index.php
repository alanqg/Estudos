<?php get_header(); ?>
<div class="conteudo">
    <main>

        <section class="slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Slider</h2>
                    </div>
                </div>
            </div>
        </section><!--Finalizando o Slider-->

        <section class="servicos">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h2>Serviços</h2>
                </div>
                </div>
            </div>
        </section><!--Fizalizado o Serviços-->


        <section class="meio">
            <div class="container">
                <div class="row">
                    <aside class="col-md-3">
                        <h2>Sidebar</h2>
                    </aside><!--Finalizando a lateral-->


                    <div class="col-md-9">
                        <!--Loop padrão do WP-->
                        <?php
                            if(have_posts()) :
                                while(have_posts()) : the_post();
                        ?>

                        <!--Chamando o modelo padrão do posts-->
                        <?php get_template_part('content', get_post_format()); ?>
                        
                        <?php
                            endwhile;
                            else:
                        ?>
                        <p>Não nada para mostrar!!!</p>
                        <?php
                            endif;
                        ?>
                    </div><!--Finalizando área das noticias -->
                </div>
            </div>    
        </section><!--Finalizando seção do meio com sidebar lateral-->

    </main>
</div>
<?php get_footer(); ?>