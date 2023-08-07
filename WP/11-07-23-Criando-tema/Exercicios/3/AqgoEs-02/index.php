<?php get_header(); ?>

   <section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php 
                    if( have_posts() ):
                        while( have_posts() ): the_post();
                ?>

                <?php get_template_part( 'template-parts/content', get_post_format() ); ?> 

                <?php
                    endwhile;
                else:
                ?>
                <p>Nada para mostrar</p>
                <?php endif; ?>
            </div> 

            <div class="col-md-4">Dois postes </div>
        </div>
    </div>
   </section>


<?php get_footer(); ?>