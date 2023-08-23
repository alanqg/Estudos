<?php get_header(); ?>

 <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">

  <div class="container">
        <div class="row">
        <div class="col s12">
            <?php
                if(have_posts() ):
                    while(have_posts() ): the_post();
            ?>
            <?php get_template_part('templates-parts/content', get_post_format() ); ?>

            <?php endwhile; ?>
            <?php else: ?>
                <p>Não tem nada para mostrar</p>
            <?php endif; ?>
        </div>
        </div>
    </div>

<?php get_footer();?>
