<?php get_header(); ?>
<div id="primaria">
    <div id="main">
        <div class="container">
            <!--Para o arquivo para o corpo do post não precisa chamar o if( have_posts() ) dos posts já estamos dentro do post-->
           <?php 
            while(have_posts() ): the_post();
                get_template_part( 'template-parts/content', 'single');
            endwhile;
           ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>