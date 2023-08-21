<?php
    function carregar_script(){
        //Materialize.css | js
        
<<<<<<< Updated upstream
    wp_enqueue_script('materialize-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(), '1.0.0', true);
        //Materialize.css | Css
    wp_enqueue_style('materialize-css',  'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '1.0.0', 'all');
     
        //Icones
    wp_enqueue_style('fonts-googleapis',  'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', 'all');

        //css customer
=======
    wp_enqueue_script('materialize-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(), '5.3.1', true);

    wp_enqueue_style('materialize-css',  'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '1.0.0', 'all');


    /*Icone*/
    wp_enqueue_style('icone', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '', 'all');
    
>>>>>>> Stashed changes
    wp_enqueue_style('customer', get_template_directory_uri() . '/css/customer.css', array(), '1.0', 'all');


    }
    //Estilos
    add_action('wp_enqueue_scripts', 'carregar_script');

<<<<<<< Updated upstream
    function config_tema(){
        
        //Registrar menus
        register_nav_menus(
            array(
                'menu_principal' => 'Menu do Topo',
                'menu_segudario' => 'Menu Secudário'
            )
        );   
    //theme Support
    }
    //Chamada para a função das confirações do tema
    add_action('after_setup_theme', 'config_tema', 0 ); 



    
=======

    //Confiração geral do tema imagem destaque etc.
    function config_tema(){
        register_nav_menus(
            array(
                'menu_top' => 'Menu Principal',
                'menu_rodape' => 'Menu Secundário'
            )
        );
    }

    add_action('after_setup_theme', 'config_tema', 0 );
>>>>>>> Stashed changes
?>