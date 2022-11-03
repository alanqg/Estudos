
      <!--Title da página -->  
    <article class="pedding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 noticias">
                <h2 class=tititlo_notocias>Noticias</h2>
                <?php query_posts('showposts=1&cat=3'); ?>

                <?php 
                    if (have_posts() ) : while ( have_posts() ) : the_post();
                ?>

                <?php the_post_thumbnail(); ?>

                <h2><?php the_title(); ?></h2>
                <p>
                    <?php the_excerpt(); ?>
                </p>

                    <?php endwhile; endif; ?>

                <?php  wp_reset_query(); ?>
            </div>

            <div class="col-md-4 esportes">
            <h2 class="tititlo_notocias">Esportes</h2>
                <?php query_posts('showposts=1&cat=4'); ?>

                <?php 
                    if (have_posts() ) : while ( have_posts() ) : the_post();
                ?>

                <?php the_post_thumbnail(); ?>

                <h2><?php the_title(); ?></h2>
                <p>
                    <?php the_excerpt(); ?>
                </p>

                    <?php endwhile; endif; ?>

                <?php  wp_reset_query(); ?>
            </div>
            <div class="col-md-4 tecnologia">
            <h2 class="tititlo_notocias">Tecnologia</h2>
                <?php query_posts('showposts=1&cat=5'); ?>

                <?php 
                    if (have_posts() ) : while ( have_posts() ) : the_post();
                ?>

                <?php the_post_thumbnail(); ?>

                <h2><?php the_title(); ?></h2>
                <p>
                    <?php the_excerpt(); ?>
                </p>

                    <?php endwhile; endif; ?>

                <?php  wp_reset_query(); ?>
            </div>
        </div>
    </div>
</article>