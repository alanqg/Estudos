<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="myheader">
    <div class="container">
    <div class="row">
        <div class="col-4 logo">
            <h1>AqGoEs</h1>
        </div>

    <div class="col-5">
        <nav>
            <ul>
               <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-topo'
                    )
                );
               ?>
            </ul>
        </nav>
        
    </div>
        <div class="col-md-3">
            <form class="d-flex" role="search">
            <input class="form-control me-2 " type="search" placeholder="Pesquise aqui.." aria-label="Search">
            <button class="btn btn-outline-dark btn-pesquisa" type="submit">Pesquisa</button>
        </form>
        </div>
    </div>
    </div>
</header>
 
