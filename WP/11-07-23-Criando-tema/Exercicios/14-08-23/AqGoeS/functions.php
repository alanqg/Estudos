<?php
    function carregar_script(){
        //Materialize.css | js
        
    wp_enqueue_script('materialize-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(), '1.0.0', true);
        //Materialize.css | Css
    wp_enqueue_style('materialize-css',  'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '1.0.0', 'all');
     
        //Icones
    wp_enqueue_style('fonts-googleapis',  'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', 'all');

        //css customer
    wp_enqueue_style('customer', get_template_directory_uri() . '/css/customer.css', array(), '1.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'carregar_script');

?>