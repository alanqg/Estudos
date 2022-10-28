<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema Names</title>
    <?php wp_head(); ?> <!--Colcar menus superior do wp, chamado os estilos do site depois que foi feito a função de 
    chamada dos estilos dentro do arquivos functions.php-->
    
</head>
<body <?php body_class(); ?>>
    <header>

        <div class="barra-topo">
            <div class="container">
            <div class="row">
                <div class="redes-socias col-md-4">Rede Socias</div>
                <div class="pesquisa col-md-8">Pesquisar</div>
            </div>
            </div>

        </div><!--Finalizando a barra topo-->
        <div class="area-menu">
        <div class="container">
            <div class="row">
                 <div class="logo col-md-3">Logo</div>
                <div class="menu-principal col-md-9 text-right">
                    <?php wp_nav_menu( array( 'theme_location' => 'meu_menu_principal') ); ?>
                </div>
            </div>
            </div>
        </div><!--Finalizando a area de menu-->

    </header><!--Finalizando todo cabeçalho com um menu rede socias é um campo de pesquisa-->