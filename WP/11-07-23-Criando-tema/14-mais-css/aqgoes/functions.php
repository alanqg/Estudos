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






?>