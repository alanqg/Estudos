<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos WP</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<<<<<<< Updated upstream
    <header class="cabecalho">
        <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">AqGoEs</a>
                <ul class="right hide-on-med-and-down">
                    <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu_principal'
                            )
                        );

                    ?>
                
                </ul>
            </div>
        </nav>
    </div>
=======
    <header>
            <nav>
            <div class="nav-wrapper ">
            <a href="#!" class="brand-logo"><i class="material-icons">cloud</i>Logo</a>
            <ul class="right hide-on-med-and-down">
                <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'menu_top'
                      )
                    );
                ?>
            </ul>
            </div>
        </nav>    
>>>>>>> Stashed changes
    </header>