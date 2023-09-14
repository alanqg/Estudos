<?php
    function load_scripts(){
        wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.3.2', true );
        wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all' );
        wp_enqueue_style( 'customer', get_template_directory_uri() . '/css/customer.css', array(), '1.0', 'all' );
    }
    add_action( 'wp_enqueue_scripts', 'load_scripts' );


        function conf_geral(){
            register_nav_menus(
                array(
                    'menu_principal' => 'Menu do Topo',
                    'menu_rodape' => 'Menu Rodapé'
                 )
            );

            //Add-them-support
            add_theme_support('title-tag'); //Chamado o title do head
            
        }
        add_action('after_setup_theme', 'conf_geral', 0);


?>