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




?>