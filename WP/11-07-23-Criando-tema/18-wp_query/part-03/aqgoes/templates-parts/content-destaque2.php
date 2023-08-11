<!--Página para os dois posts destaque, dois do primeiro destaque da pagehomne-->
<article <?php post_class( array('class' => 'destaque2') ); ?>>
    <h2><?php the_title(); ?></h2>
    <div class="thumbnail">
        <?php the_post_thumbnail('large', array( 'class' => 'img-fluid' ) ); ?>
    </div>

    <div class="meta-info">
        <p>
            Por: <span><?php the_author_posts_link(); ?></span>
            Categories: <span><?php the_category(); ?></span>
            <?php the_tags( 'Tags: <span>', ', ', '</span>' ); ?>
        </p>
  
    </div>
    <?php  the_excerpt(); ?>
</article>