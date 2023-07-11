<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando tema Worpdrerss</title>
</head>
<body>

<?php
    if ( have_posts() ) :
        while (have_posts() ) : the_post();

?>

    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

    <?php the_content() ?>

    <?php endwhile;
        else :
            echo '<p> Não nada para mostrar</p>';
    endif;
    ?>

</body>
</html>