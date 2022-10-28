<!---Arquivo para a primeira caixa de post da página home-->
<article class="noticias-destaque">
<div class="container">
<div class="row">
    <div class="miniatura">
        <?php the_post_thubnail('large', array('class' => 'img-responsive')); ?>
    </div>
    <p> <?php the_title(); ?></p>
    <p> 
        Criado Por: <?php the_auhotr();  ?>
        Categoria:  <?php the_category( ' ' );  ?>
        Tags: <?php the_tags('Tags: ', ', '); ?>
        Data: <?php echo get_the_date();  ?> 
    </p>
    <?php  the_exercpt(); ?>
 </div>
 </div>
</article>