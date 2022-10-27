    <footer>
        <div class="container">
            <div class="row">
                 <div class="menu-rodape">   
                <div class="col-md-6">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu_rodape',
                        ));

                    ?>
                </div>
                </div><!--Finalizando o menu do rodapá-->

                <div class="texto-rodape">     
                <div class="col-md-6">
                    <h2>Copyright Hospe<span>Sites</span></h2>                  
                </div>
                </div> <!--Finalizando texto lateral rodapé-->
            </div>
        </div>
    </footer>


<?php wp_footer(); ?>
</body>
</html>