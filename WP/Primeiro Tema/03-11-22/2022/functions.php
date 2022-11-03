<?php

    //Carregando scripts
   function carrega_scripts(){

    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css', array(), '3.3.7', 'all');

    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js', array('jquery'), null, true);
    
    
    wp_enqueue_style('customer', get_template_directory_uri() . '/css/customer.css', array(), '1.0', 'all');
    wp_enqueue_script('customer', get_template_directory_uri() . '/js/customer.js', array(), null, true);
   }
   
    //Chamando os scripts
   add_action('wp_enqueue_scripts', 'carrega_scripts');

    /*Menus*/
    register_nav_menus(
        array(
            'menu_top' => 'Menu Principal',
            'menu_rodape' => 'Menu Rodapé',
        )
    );




    if(function_exists('register_sidebar')){
        register_sidebar(
            array(
                'nome' => 'Barra Lateral-01',
                'id' => 'sidebar01',
                'description' => 'Sidebar para a página do blog',
                'before_widget' => '<div class"widget-wrapper">',
                'after_widget' => '<div>',
                'before_title' =>  '<h2 class="widget-title">',
                'after_title' => '</h2>',
            )
        );


        
    }
   ?>