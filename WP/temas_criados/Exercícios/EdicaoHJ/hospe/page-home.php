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

        <aside class="lateral">
            <div class="col-md-3">
               <?php get_sidebar('home'); ?>
            </div>
        </aside><!--Barra lateral da home quanto tiver uma página estatica configurada-->
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                    <?php

$tamanho = 'col-md-12';
$op_content = 'destaque';

$itens = get_categories(array('include' => '8, 9, 25'));
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
 </div><!--Posts da página inccial, se caso a pagina estatica esteja ativada-->
 </div>
 </div>
 </section>
<?php get_footer(); ?>