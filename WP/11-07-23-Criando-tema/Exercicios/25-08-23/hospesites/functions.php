<?php
    function carregar_scripts(){
        //JS Bootstrap
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array(), '5.3.1', true);

        //Css Materialze 
        wp_enqueue_style('bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' , array(), '5.3.1', 'all');

        //icone
        wp_enqueue_style('icones', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', 'all' );

        /*Js programador*/
        wp_enqueue_script('customer', get_template_directory_uri() . '/js/customer.js', array(), '1.0', 'all');

        /*Css Programador */
        wp_enqueue_style('customer', get_template_directory_uri() . '/css/customer.css', array(), '1.0', 'all');
        

    }
  add_action('wp_enqueue_scripts', 'carregar_scripts');

  function config_tema(){
    //REgistro dos menus 
    register_nav_menus(
      array(
        'menu-topo' => 'Menu Cabeçalho',
        'menu-rodape' => 'Menu Rodapé'
      )
    );
    //Pernosalização do cabeçolho com imagem
    $args = array(
      //Altura e largura da imagem
      'height' => '225',
      'width' => '1920'
    );

    //Chamando a varialvel args como argumento com o tamanho e largura da imagem em destaque
    add_theme_support('custom-header', $args);
    //Miniaturas de imagens para posts
    add_theme_support('post-thumbnails');
    //Tipos de posts
    add_theme_support('post-formats', array('video', 'image') );

  }
  add_action('after_setup_theme', 'config_tema');

  //Registrando sidebar para o blog é a página principal do site
  add_action('widgets_init', 'sidebar_home_blog');
  function sidebar_home_blog(){
    register_sidebar(
      array(
        'name' => 'Sidebar para a home',
        'id' => 'sidebar-home',
        'description' => 'Sidebar para a página prncipal',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title' => '<h2 classs="widget-title">',
        'after_title' => '</h2>'
      )
    );
    //home
    register_sidebar(
      array(
        'name' => 'Sidebar Blog',
        'id' => 'sidebar-blog',
        'description' => 'Sidebar para a página home',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
      )
    );


  }

    

?>