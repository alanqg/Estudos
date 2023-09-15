<article <?php post_class(); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="fakeimg">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
        <p>
            <?php the_excerpt(); ?>
        </p>
        </div>        
</article>