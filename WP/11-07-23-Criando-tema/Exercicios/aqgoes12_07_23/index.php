<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AqGoes</title>
</head>
<body>
    <h1>AqGoes</h1>

    <?php
        if( have_posts() ): 
            while( have_posts() ): the_post();
    ?>
        <?php get_template_part('template-parts/content', get_post_format()); ?>
    <?php
        endwhile;
    else:
    ?>
    <?php endif; ?>
    <p>Nada para mostar</p>
</body>
</html>