<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição Template Curso</title>
    <?php wp_head(); ?>
</head>
<header>
    <div class="topo text-right">
        <div class="container">
            <div class="row">
                <div class="redeSocias">
                <div class="col-md-3">
                    <h2>Rede Socias</h2>
                </div>
                </div><!--Finalizando Rede Socias-->
                <div class="pesquisa">
                    <div class="col-md-9">
                        <h2>Pesquisa</h2>
                    </div>
                </div>
                
            </div>
        </div>
    </div><!--Finalizando Div do top rede socias campo de pequisa-->

    <div class="menu-topoo text-right">
    <div class="container">
        <div class="row">

        <div class="logo">
            <div class="col-md-3">
                <h2>Logo</h2>
            </div>   
            </div>
                

            <div class="menu-topp">
                <div class="col-md-9">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'meu_menu_principal',
                        ));
                    ?>
                </div>
            </div>
    </div>
    </div>
    </div><!--Finalizando o menu do topo-->
</header>
