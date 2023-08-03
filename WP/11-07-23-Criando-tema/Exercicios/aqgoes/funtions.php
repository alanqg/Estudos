<?php
    function carregar_estilo(){
        wp_enqueue_style('customer', get_template_directory_uri() . '/css/customer.css', array(), '1.0', 'all');
    }


    add_action('wp_enqueue_scripts', 'carregar_estilo');
?>