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



/*Área para registro de menus*/
register_nav_menus(
    array(
        'my_main_menu' => 'Main Menu',
        'my_second_menu' => 'second Menu'

    )
);
?>