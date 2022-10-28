
<?php get_header(); ?>
<div class="container">
    <div class="row">
      <div class="pedding-top">
		<div class="blog">
			<!-- Começa o Loop. -->
 <?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<!-- O código a seguir testa se o post atual pertence à categoria 3 -->
<!-- Se pertence, a classe CSS da DIV será definida como "post-cat-three". -->
<!-- Se não, uma classe de DIV será definida como "post". -->
<?php if ( in_category('3') ) { ?>
		  <div class="post-cat-three">
<?php } else { ?>
		  <div class="post">
<?php } ?>

<!-- Mostra o título como um link para o link permanente do post -->
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Link permanente para <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<!-- Mostra a dados e um link para outros posts do mesmo autor. -->
<small><?php the_time('F jS, Y') ?> por <?php the_author_posts_link() ?></small>

<!-- Mostra o conteúdo do post em uma DIV -->
<div class="entrada">
  <?php the_content(); ?>
</div>

<!-- Mostra uma lista de categorias do post separado --> por vírgula
<p class="postmetadata">Postado em <?php the_category(', '); ?></p>
</div> <!-- Fecha a primeira DIV -->

<!-- Termina o Loop (mas repare no "else" - veja próxima linha) -->
<?php endwhile; mais: ?>

<!-- O primeiro IF testou para ver se havia posts a balcãos -->
<!-- Este ELSE diz ao WordPress o que fazer se não existe nenhum -->
<p>Desculpe, nenhuma postagem correspondeu aos seus critérios.</p>

<!-- Termo verdadeiro do Loop -->
<?php endif; ?>
		</div>
    </div>
  </div>
</div>
<?php get_footer(); ?>


    
