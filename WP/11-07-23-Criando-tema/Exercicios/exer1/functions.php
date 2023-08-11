<?php
    //*Estilos Scripts
    function carregar_scripts(){
        wp_enqueue_script('bootstrp', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array(), '5.3.1', true);

        wp_enqueue_style('bootstrp', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', array(), '5.3.1', 'all');

        wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');

    }
add_action('wp_enqueue_scripts', 'carregar_scripts');

?>