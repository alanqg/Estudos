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
?>