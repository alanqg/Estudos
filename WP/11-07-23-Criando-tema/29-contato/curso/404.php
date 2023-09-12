<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="error-404">
                        <header>
                            <h1>Página não Encontrada</h1>
                            <p>Página que você procura não foi encontrada, favor vefificar sua pesquisa ou URL</p>
                        </header>

                        <div class="error">
                            <p>Qual tal fazer uma pesquisa?</p>
                            <?php get_search_form(); ?>

                            <?php the_widget('WP_Widget_Recent_Posts', array( 'title' => 'Últimos Posts', 'number' => 3)); ?>
                        </div>
					</div>
				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>