<article <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail( array( 250,250)); ?>
    <p>
        <?php the_content(); ?>
    </p>
</article>
