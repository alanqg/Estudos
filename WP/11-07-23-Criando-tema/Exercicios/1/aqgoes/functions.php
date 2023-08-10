<?php
    function carrega_script(){
        //js bootstrap
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',array(), '5.0.2', true);
        //css boostrap
        wp_enqueue_style('bootsrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all');
        //css dp programador
        wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'carrega_script');
?>