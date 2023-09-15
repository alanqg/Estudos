<?php get_header(); ?>

  <div class="row">
  <div class="leftcolumn">
  <?php
            $destaque = new WP_Query('post_type=post&posts_per_page=3&cat=2,3');
            if($destaque->have_posts() ):
                while($destaque->have_posts() ) : $destaque->the_post();
        ?>
    <div class="card">
        <?php get_template_part( 'templates-parts/content', 'destaque');  ?>
    </div>
    <?php endwhile;
            endif;
    
    ?>
    </div>
    <div class="rightcolumn">  
        <?php get_sidebar('home') ?>
  </div>
<?php get_footer(); ?>

      