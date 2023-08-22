<article id="post<?php the_ID(); ?>"<?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p>
                Psotando em:<?php echo get_the_date(); ?>por: <?php the_author_posts_link(); ?>
           </p>
           <p>
            Categoria: <?php the_category(); ?>
           </p>
           <p>
            <?php the_tags('Tag:', ', '); ?>
           </p>
        </div>
    </header>

    <div class="content">
        <?php the_content();?>
    </div>
</article>