<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AqGoes</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="container">
    <div class="row">

        <header class="navbar navbar-default navbar-fixed-top cabecalho">
            <div class="col-md-4 logo">
                <h1><a href="#">Aq<span>Goes</span></a></h1>
            </div>

            <div class="col-md-4 menu_pricipal">
                <nav>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu_top',
                            )
                        );
                    ?>
                </nav>    
            </div>

            <div class="col-md-4 campo-pesquisa text-right">Pequisar</div>
        </header>
    </div>
</div><!--Finalizando os container -->


