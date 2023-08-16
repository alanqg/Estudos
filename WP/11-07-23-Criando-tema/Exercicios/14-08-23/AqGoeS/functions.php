<?php
    function carregando_scripts(){
        //Bootstrap js
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array(), '5.3.1', true);
        //Bootstrap css
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', array(), '5.3.1', 'all');

        //Css do programador
        wp_enqueue_style('customer', get_template_directory_uri(). '/css/customer.css', array(), '1.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'carregando_scripts');


    /*Config do site*/
    function confisite(){
        register_nav_menus(
            array(
                'menu_topo' => 'Menu Principal',
                'menu_secudario' => 'Menu Segudário'
            )
        );

        //Theme_support
        //Imagem de destaque para os posts
        add_theme_support( 'post-thumbnails');
        //Formatos de posts
        add_theme_support( 'post-formats', array( 'video', 'image'));
    }
    add_action('after_setup_theme', 'confisite');

     //Sidebar
    add_action('widgets_init', 'sidebars');
    function sidebars(){
        register_sidebar(
            array(
                'name' => 'Sidebar Blog',
                'id' => 'sidebar-blog',
                'description' => 'Sidebar do Blog',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
    }
 
?>