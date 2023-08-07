<?php get_header(); ?>

<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php
                        //Se houver posts
                        if( have_posts() ):
                        //Enquanto tiver posts mostre os posts
                        while ( have_posts() ): the_post();
                    ?>
                        <p>Nada para mostar</p>
                    <?php
                        endwhile;
                    else:
                    ?>

                    <p>Até o momento não tem posts</p>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">Barra lateral</div>
            </div>
 </div>

<?php get_footer();  ?>