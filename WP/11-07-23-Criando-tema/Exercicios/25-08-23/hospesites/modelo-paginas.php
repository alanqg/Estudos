<?php
    /*
        Template Name: Modelo de páginas
    */
?>
<?php get_header(); ?>      

    <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"  alt="">

    <h1>Modelo de Páginas</h1>
    <?php
        if(have_posts()) :
            while(have_posts()) : the_post();
    ?>

    
    <div class="container">
        <div class="row">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        </div>
    </div>

    
    
        <?php endwhile;
            else:
            endif;
        ?>
<?php get_footer(); ?>