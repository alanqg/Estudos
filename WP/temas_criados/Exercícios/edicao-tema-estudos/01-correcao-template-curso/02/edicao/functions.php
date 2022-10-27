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
    /*Arquivos adcionais como cor do fundo*/
    add_theme_support('custom-background');
    /*imagem para o cabeçalho de algumas páginas*/
    add_theme_support('custom-header');
    /*Img destaque */
    add_theme_support('post-thumbnails');
    /*Formatos de posts*/
    add_theme_support('post-formats', array('video', 'image'));




    /*Sidebars*/
    /*Primeira Sidebar*/
    if(function_exists('register_sidebar')){
        register_sidebar(
            array(
               'name' => 'Barra Home',
               'id' => 'sidebar-home',
               'description' => 'Sidebar da página Home',
               'before_widget' => '<div class="widget-wrapper">',
               'after_widget' =>  '</div>',
               
               'before_title' => '<h2 class="widget-titulo">',
               'affter_title' => '</h2>',
            )
            );/*Finalizando a primeira sidebar*/

            register_sidebar(
                array(
                   'name' => 'Barra Blog',
                   'id' => 'sidebar-blog',
                   'description' => 'Sidebar da página Home',
                   'before_widget' => '<div class="widget-wrapper">',
                   'after_widget' =>  '</div>',
                   
                   'before_title' => '<h2 class="widget-titulo">',
                   'affter_title' => '</h2>',
                )
                );/*Finalizando a primeira sidebar*/

            


            
        }

?>