<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AqGoes</title>
    <!--Umas das principais função do cmando a chamar as folhas de estilos incluindo os estilos do WP-->
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>> <!---Chamado para mudar algumas classes em casa página, isso facilita na hora de fazer estilos diferentes para páginas diferentes -->
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <!--Área de pesquisa é media social-->    
                    <div class="social-media-icons col-xl-9 col-sm-7 col-6">Icones Socias</div>
                    <div class="search col-xl-3 col-sm-5 col-6 text-end">Pesquisa</div>
                </div>
            </div>
        </section>

            <!--Area de menus-->
            <section class="menu-area">
                <section class="logo">Logo</section>
                <nav class="menu">Menu</nav>
            </section>
         
    </header>
