<!--Verificando se a primeira sidebar está ativa-->
<?php 
    if (is_active_sidebar('sidebar01') ){
        dynamic_sidebar('sidebar01');
    }

?>