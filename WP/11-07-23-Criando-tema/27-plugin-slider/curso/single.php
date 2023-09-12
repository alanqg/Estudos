<?php get_header(); ?>
<div id="primaria">
    <div id="main">
        <div class="container">
            <!--Para o arquivo para o corpo do post não precisa chamar o if( have_posts() ) dos posts já estamos dentro do post-->
           <?php 
            while(have_posts() ): the_post();
                get_template_part( 'template-parts/content', 'single');
                 
                 ?>
                <div class="row">
                    <div class="pages text-end col-md-6">
                        <?php next_post_link('&laquo; %link'); ?>
                    </div>
                    <div class="pages text-start col-md-6">
                        <?php previous_post_link('%link &raquo;'); ?>
                    </div>
                </div>

                 <?php
                      //Páginação para os proximos posts
                if(comments_open() || get_comments_number()):
                comments_template(); 
            endif;

            endwhile;

           

           ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>