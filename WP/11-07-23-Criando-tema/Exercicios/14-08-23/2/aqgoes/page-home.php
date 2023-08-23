<?php get_header(); ?>
    <main>
        <div class="compeindex">
            
                <div class="container">
                <div class="row">
                <div class="col s12">Slider</div>

                <div class="servicos">
                    servivos
                </div>

                <div class="container">
                    <div class="row">
                        
                            <?php
                                $destaque = new WP_Query( 'post_type=post&posts_per_page=1&cat=13,10');
                            
                                if($destaque->have_posts() ): 
                                    while($destaque->have_posts() ): $destaque->the_post();
                            ?>
                        <div class="col s12"><?php get_template_part('templates-parts/content', 'destaque'); ?> </div>

                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;




                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                            'category__not_in' => array( 13 ),
                            'category__in' => array(4, 10),
                            'offset' => 1
                        );

                        $segunddestaque = new WP_Query($args);
                        
                        if($segunddestaque->have_posts() ):
                            while($segunddestaque->have_posts() ): $segunddestaque->the_post();
                    ?>
                    <div class="col s6"> 
                    <?php get_template_part('templates-parts/content', 'segunddestaque');
                        ?>       
                    </div>
                   <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                   ?>   
                </div>
                </div>
    </main>
    
<?php get_footer(); ?>

