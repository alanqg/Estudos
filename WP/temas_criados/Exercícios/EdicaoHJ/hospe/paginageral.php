<?php
    /*
        Template Name: Página geral 

    */
?>
<?php get_header(); ?>

<!--Imagem de fundo do header para as páginas padrão-->
<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">

    <div class="coneudo-wrapper">
        <div class="container">
            <div class="row">

                <?php
                    if(have_posts()) : 
                        while(have_posts()) : the_post();
                ?>

                <h1><?php the_title(); ?></h1>
                <p class="pdetalhes">
                    Autor: <?php the_author(); ?>
                </p>
                <p>
                    <?php the_content(); ?>
                </p>

                <?php
                    endwhile;
                    else:
                            
                ?>
                <p>Não nada para mostrar!</p>
                <?php
                    endif;
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>