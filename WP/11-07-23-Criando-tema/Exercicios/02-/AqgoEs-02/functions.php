<?php
/*Funçoes para o tema AqGoes*/
function cerragar_scripts(){
    /*Js Booststrap */
    wp_enqueue_script('Bootstrao-js',   'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array(), '5.3.1', true  );
    /*Css Bootstrap*/
    wp_enqueue_style('Bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', array(), '5.3.1', 'all' );

    /*Estilo do programador*/
    wp_enqueue_style('customer', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'cerragar_scripts' );



/*Confirações add_theme_support menus */
function aqgoes_config(){
    /*Registrando os menus*/
    register_nav_menus(
        array(
            'meu_menu_principal' => 'Menu Principal',
            'menu_segudario' => 'Menu Segundário'
        )
        );

        /*Adicionando imagem para os psots imagens de destaque para cada posts*/
        add_theme_support( 'post-thumbnails' );
}

/*Finalizando a chamada para a função de confiração*/
add_action( 'after_setup_theme', 'aqgoes_config',  0 );

?>