<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"  alt="">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
                if( have_posts() ):
                     while(have_posts() ): the_post(); 
                     ?>
            <?php get_template_part('template-parts/content', get_post_format() ); ?>
            <?php endwhile;
                else:
                ?>
                <p>Nada para mostrar</p>
                <?php endif; ?>
        </div>

        <?php get_sidebar('blog'); ?>
    
    </div>
</div>

<?php get_footer(); ?>