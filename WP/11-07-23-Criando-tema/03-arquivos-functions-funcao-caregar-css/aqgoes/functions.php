<?php
/*Carregar os scripts*/
function load_scripts(){
    /*Primeoro paramentro o nome do arquivo, segundo parametro é o caminho, outro parametro é para ver se existem depecias do aquivo no caso o css,depois a versão é qual tipo e média no casal aqui todas */
    wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}

/*Associando o nome da função ao gancho WP, conforme a foto do arquivo referente aos ganchos WP*/
add_action( 'wp_enqueue_scripts', 'load_scripts' );
?>