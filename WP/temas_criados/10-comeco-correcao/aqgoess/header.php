<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>

        <div class="container">
        <div class="row">
            <div class="barra-topo">
                <div class="col-md-4"><h2>Rede Socias</h2></div>
                <div class="col-md-8"><h2>Campo Pesquisar</h2></div>
            </div><!--Finalizando a barra do topo-->
        </div>
        </div>

        <div class="container">
            <div class="row">
                <nav class="area-menu">
                    <div class="logo col-md-3"><h1>aqgoes</h1></div>
                    <nav class="menu-pricipal col-md-9 text-right">
                        <?php wp_nav_menu(array( 'theme_location' => 'menu_principal') ); ?>
                    </nav>
                </nav>
            </div>
        </div>
    </header>