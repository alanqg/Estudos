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



//Theme_support
//Cor do fundo personalizada, ma opção personalizar do tema
add_theme_support('custom-background');

//Foto de fundo para o header
add_theme_support('custom-header');

//Chamada das miniaturas de imagens para os posts
add_theme_support('post-thumbnails');

//Formatos de posts, de vídeos imagem etc.
add_theme_support('post-formats', array('video', 'image'));


/*Criando as Sidebar's*/
if (function_exists('register_sidebar')){
    register_sidebar( 
        array(
        //Campos para a barra lateral
        'name'  =>  'Barra lateral-01',
        'id'    => 'sidebar01',
        'description'   => 'Sidebar da página home',
        //Chamando a divs 
        'before_widget'  =>  '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        //Titlos para sidebar
        'before_title' => '<h2 class="widget-titulo">',
        'after_title'  => '</h2>',

    )
 
        );

        /*Segunda sidebar */
        register_sidebar( 
            array(
            //Campos para a barra lateral
            'name'  =>  'Barra lateral-02',
            'id'    => 'sidebar02',
            'description'   => 'Sidebar da página Blog',
            //Chamando a divs 
            'before_widget'  =>  '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            //Titlos para sidebar
            'before_title' => '<h2 class="widget-titulo">',
            'after_title'  => '</h2>',
    
        )
     
            );
}

?>