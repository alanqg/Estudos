<?php
    function carregar_scripts(){
        //JS Bootstrap
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array(), '5.3.1', true);

        //Css Materialze 
        wp_enqueue_style('bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css' , array(), '5.3.1', 'all');

        //icone
        wp_enqueue_style('icones', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', 'all' );

        /*Js programador*/
        wp_enqueue_script('customer', get_template_directory_uri() . '/js/customer.js', array(), '1.0', 'all');

        /*Css Programador */
        wp_enqueue_style('customer', get_template_directory_uri() . '/css/customer.css', array(), '1.0', 'all');
        

    }
  add_action('wp_enqueue_scripts', 'carregar_scripts');


?>