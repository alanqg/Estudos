<?php
function carregar_scripts(){
    //Js-bootstrap
    wp_enqueue_script('bootstrp-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true );
    //css
    wp_enqueue_style('Css-boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all');

    //Css programador
    wp_enqueue_style('customer', get_template_directory_uri() . '/css/custer.css', array(), '1.0', 'all');
    
}
    add_action('wp_enqueue_scripts', 'carregar_scripts');

    //configurações Gerais 
    function config_geral(){
        //regitro dos menus
        register_nav_menus(
            array(
                'menu_topo' => 'Menu Principal',
                'menu_footer' => 'Menu Footer'
            )
        );
    }

    add_action('after_setup_theme', 'config_geral');

?>