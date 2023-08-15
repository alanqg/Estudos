<?php get_header(); ?>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-md-8">
                     <?php
                        if(have_posts() ):
                            while( have_posts() ): the_post();
                    ?>
                        <?php get_template_part('template-parts/content', get_post_format() ); ?>

                        <?php endwhile; ?>
                        <?php else: ?>

                        <p>Nada para mostrar</p>

                    <?php endif; ?>         
                </div>
            </div>
        </div>
    </article>
       

<?php get_footer(); ?>