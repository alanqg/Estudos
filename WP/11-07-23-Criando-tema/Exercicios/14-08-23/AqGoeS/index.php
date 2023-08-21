<?php get_header(); ?>
    <h2>Nossos Artigos</h2>
<<<<<<< Updated upstream
   <br><br><br>
   <br><br><br>
   <br><br><br>
   <br><br><br>
   <br><br><br>
   <br><br><br>
   <br><br><br>
   <br><br><br>
   <br><br><br>
   <br><br><br>
   <br><br><br>
=======
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
>>>>>>> Stashed changes

<?php get_footer();?>
