<?php
    function carregar_scripts(){
        //JS materialize
        wp_enqueue_script('materialice-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array(), '1.0.0', true);

        //Css Materialze 
        wp_enqueue_style('materialize-css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '1.0.0', 'all');

        //icone
        wp_enqueue_style('icones', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', 'all' );

        /*Css Programador */
        wp_enqueue_style('customer', get_template_directory_uri() . '/css/customer.css', array(), '1.0', 'all');

    }
  add_action('wp_enqueue_scripts', 'carregar_scripts');


?>