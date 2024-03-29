<?php get_header(); ?>
    <div id="primary">
        <div id="main">
            <div class="container">
                <h2>Resultado de Pesquisa para:</h2> <?php echo get_search_query(); ?>
                <?php

                    get_search_form();
                    while(have_posts() ): the_post();

                        get_template_part( 'template-parts/content', 'search' );

                        if( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                endwhile;

                //Páginação
                the_posts_pagination(
                    array(
                        'prev_text' => 'Posts Anteriosres',
                        'next_text' => 'Proximos Posts',
                    )
                );
                ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>