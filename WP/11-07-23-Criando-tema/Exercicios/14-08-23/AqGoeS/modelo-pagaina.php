<?php
    /*
        Template Name: Página contato, sobre
    */

?>
<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
    <main>
        <section class="middle-area">
            <div class="container">
                <div class="row">
                    <div class="pagina-geral">
                        <?php
                            if( have_posts() ):
                                while(have_posts() ): the_post();
                                
                        ?>
                        <article>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </article>

                        <?php endwhile; ?>
                        <?php else: ?>

                            <p>Não tem nada para mostrar</p>
                        
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>