<article <?php post_class(array( 'class' => 'destaque')); ?>>
    <div class="thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large', array('class' => 'img-fluid' )); ?></a>
    </div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <!--Copor dos post em destaque -->
    <div class="meta_info">
        <p>
            Criado por: <span><?php the_author_posts_link(); ?></span>
            Categoria: <span><?php the_category(' ');?></span>
            <?php the_tags('Tags: <span>', ',', '</span>'); ?>
        </p>
        <p><span><?php echo get_the_date(); ?></span></p>
    </div>
    <?php the_excerpt(); ?>
</article>