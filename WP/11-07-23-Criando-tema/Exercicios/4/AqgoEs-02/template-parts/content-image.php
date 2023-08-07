<article class="img">
    <h2><?php the_title(); ?></h2>
    <p><?php the_post_thumbnail(array(275, 275) ); ?></p>
    <p>Por: <?php the_author_posts_link(); ?></p>
    <p>Categoria: <?php the_category(); ?></p>
    <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
    <p><?php the_content(); ?></p>
</article>

