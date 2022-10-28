<?php get_header(); ?>
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

                    <aside class="lateral">
                        <div class="col-md-3">
                        <?php get_sidebar('home'); ?>
                        </div>
                    </aside><!--Barra lateral da home quanto tiver uma página estatica configurada-->

                    <div class="col-md-9">
                        <div class="col-md-12">
                            <div class="col-md-6">Um de dois</div>
                            <div class="col-md-6">Dois de Dois</div>
                        </div>


                    </div><!--Posts da página inccial, se caso a pagina estatica esteja ativada-->

                </div>
            </div>
        </section>
<?php get_footer(); ?>