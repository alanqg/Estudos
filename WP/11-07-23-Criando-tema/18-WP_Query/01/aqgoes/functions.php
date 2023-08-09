<?php
/*Carregar os scripts*/
function load_scripts(){

    /*Chamando o js do bootstrap*/
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array(  ), '5.3.1', true );

    /*Folha de estilo do bootstrap*/
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', array( ), '5.3.1', 'all' );
    /*Primeoro paramentro o nome do arquivo, segundo parametro é o caminho, outro parametro é para ver se existem depecias do aquivo no caso o css,depois a versão é qual tipo e média no casal aqui todas */
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
/*Associando o nome da função ao gancho WP, conforme a foto do arquivo referente aos ganchos WP*/
add_action( 'wp_enqueue_scripts', 'load_scripts' );


/*Função de confiração do tema*/
function aqgoes_config(){
    /*Área para registro de menus*/
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'my_second_menu' => 'second Menu'

    )
);


/*theme_suporte*/ 
/*Criando ao altura é a largura do cabecalho*/
$args = array(
    'height' => 225,
    'width' => 1920
);
/*Suporte ao cabeçalho, primeiro argumento para customizar o cabeçalho, segundo argumento foi o do array criado acima para definir o tamanho é a largura*/
 add_theme_support( 'custom-header', $args );

 /*Miniatuea de imagens de destaque*/
 add_theme_support( 'post-thumbnails' );
 /*Formatos de posts*/
 add_theme_support( 'post-formats', array( 'image', 'video') );

}

add_action( 'after_setup_theme', 'aqgoes_config', 0 );


/*Barra laterais*/
add_action( 'widgets_init', 'aqgoes_sibedar' );
function aqgoes_sibedar(){
    register_sidebar(
        array(
            'name' => 'Sidebar Página Pricipal', 
            'id' => 'sidebar-1',
            'description' => 'Sidebar da página Home page',
            'before_widget' => '<div class="widget-wrapper">', /*Qual elemento html que vai envoler a barra lateral*/
            'after_widget' => '</div>', /*Fechando as tags acima */
            'before_title' => '<h2 class="title">', /*Titulo das widget*/
            'after_title' => '</h2>'
        )
    );
    /*Segunda sidebar blog*/
    register_sidebar(
        array(
            'name' => 'Sidebar Blog',
            'id' => 'sidebar-2',
            'description' => 'Sidebar Blog',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div class="title">',
            'before_title' => '<h2 class="title">',
            'after_title'  => '</h2>'
        )
        );


        register_sidebar(
            array(
                'name' => 'Services 1',
                'id' => 'services-1',
                'description' => 'First Services Area.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );



            /*Sidebar serviços */
        register_sidebar(
            array(
                'name' => 'Services 2',
                'id' => 'services-2',
                'description' => 'First Services Area.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );



        register_sidebar(
            array(
                'name' => 'Services 3',
                'id' => 'services-3',
                'description' => 'First Services Area.',
                'before_widget' => '<div class="widget-wrapper">',
                'after_widget' => '</div>',
                'before_title' => '<h2 class="widget-title">',
                'after_title' => '</h2>'
            )
        );
}


?>