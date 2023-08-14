<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AqGoeS</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><h1>AqGoeS</h1></div>
                <div class="col-md-8">
                    <nav class="menu-header">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu_topo'
                                )
                            );

                        ?>
                    </nav>
                </div>
            </div>
        </div>
        
    </header>