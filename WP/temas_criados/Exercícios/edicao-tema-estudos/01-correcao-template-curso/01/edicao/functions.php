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



//Função para o menu
register_nav_menus(
    array(
        'meu_menu_principal' => 'Menu Principal',
        'menu_rodape' => 'Menu Rodapé',

    )
);
    add_theme_support('custom-background');
    add_theme_support('custom-header');

    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('video', 'image'));


?>