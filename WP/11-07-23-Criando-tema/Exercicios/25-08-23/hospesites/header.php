<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-4"><a href="#"><h1>Logo</h1></a></div>

            <div class="col-md-8">
                <nav>
                    <?php wp_nav_menu(
                        array(
                            'theme_theme' => 'menu-topo'
                        )
                    ); ?>
                </nav>
            </div>
        </div>
    </div>
</header>
 
