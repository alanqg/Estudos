<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos Wp</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>

        <nav class="navbar bg-body-tertiary menu text-end">
        <div class="container-fluid">
            <a href="#" class="navbar-brand logo">AqGoes</a>
            <ul>
            <li>
            <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'meu_menu_principal'
                        )
                    );
                
                ?>
            </li>
            </ul>

            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        </nav>
</header><!--Finalizando header-->