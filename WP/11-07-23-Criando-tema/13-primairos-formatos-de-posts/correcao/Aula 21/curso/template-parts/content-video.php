<article class="video">
	<h2><?php the_title(); ?></h2>
	<?php the_post_thumbnail( array( 275, 275 ) ); ?>
	<p>Published in <?php echo get_the_date(); ?></p>
	<p>Categories: <?php the_category( ' ' ); ?></p>
	<p><?php the_tags( 'Tags: ', ', ' ); ?></p>
	<?php the_content(); ?>
</article>