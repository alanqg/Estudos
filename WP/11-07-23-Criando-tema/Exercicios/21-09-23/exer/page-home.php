<?php get_header(); ?>
<main>  
    <section class="slider">
        <h2>Slider</h2>
    </section>
        
    <section class="posts-sidebar">
        <article class="artigos">
            <div class="posts-g">
                <?php
                    $destaque = new WP_Query( 'post_type=post&posts_per_page=2&cat=2,3' );
                    
                    if( $destaque->have_posts() ) :
                        while( $destaque->have_posts() ) : $destaque->the_post();
                ?>

                <?php get_template_part('template-parts/content', 'destaque'); ?>

                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>

            <div class="dois-posts">
               <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'category__not_in' => array( 3 ),
                        'category__in' => array(2, 4 ),
                        'offset' => 1
                    );
                    $doisposts = new WP_Query( $args );
                    if($doisposts->have_posts() ) :
                        while($doisposts->have_posts() ) : $doisposts->the_post();
               ?>
               <?php get_template_part('template-parts/content', 'doisposts'); ?>

               <?php 
                endwhile;
                wp_reset_postdata();
            endif;
               ?>
            </div>
        </article>
        <aside class="sidebar h-100">
            <div>
                <h1>Item um</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint et quis laboriosam magni dolorem dignissimos placeat facilis fugiat quisquam sed, quod dolorum repellat tempora labore voluptatum magnam veritatis itaque at!
                </p>
            </div>
            <div>
                <h1>Item dois</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt consequatur porro ullam, dicta repellendus sapiente hic enim reprehenderit quaerat maxime! Nam esse ab at qui et, ducimus eos vel accusantium.
                </p>
            </div>
        </aside>
    </section>

    <section class="sobre">
        <h2>Sobre</h2>
    </section>
</main>
<?php get_footer(); ?>