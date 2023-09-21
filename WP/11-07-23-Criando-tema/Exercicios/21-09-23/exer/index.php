

<?php get_header(); ?>
<main>  
    <section class="posts">
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                  <aside>
                     <h2>Sibebar</h2>
                  </aside>
                   </div>
                <div class="col-md-8">
                    <article>
                    <h1>Página Posts</h1>
                        <?php
                           if( have_posts() ) : 
                              while( have_posts() ) : the_post();
                        ?>

                           <?php get_template_part('template-parts/content', get_post_format() ); ?>

                              <?php 
                                 endwhile;
                              else:
                              ?>

                           <p>Mão tem nada para mostrar</p>
                           <?php endif; ?>
                    </article>
                </div>
            </div>
        </div>
    </section>

</main>
<?php get_footer(); ?>