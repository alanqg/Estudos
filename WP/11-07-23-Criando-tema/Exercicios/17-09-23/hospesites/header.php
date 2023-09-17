<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospeSites</title>
    <?php  wp_head();?>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            
            <div class="col-md-3 logo">
                <h1>AqGoeS</h1>
            </div>



            <div class="col-md-6">
                <div class="menu">
                    <?php wp_nav_menu(
                        array(
                            'theme_locaction' => 'menu_principal'
                        )
                    ); ?>
                </div>
             
            </div>
            <div class="col-md-3 search">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</header>