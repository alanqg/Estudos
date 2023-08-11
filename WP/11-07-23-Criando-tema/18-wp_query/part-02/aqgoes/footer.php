<footer>
    <div class="container">
        <did class="row">
            <div class="copyright col-sm-7 col-4">
                <p>Copyright</p>
            </div><!--Finalizando copyright-->

            <nav class="footer-menu col-sm-5 col-8 text-end">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'my_second_menu'
                        )
                    );
                ?>
            </nav>
        </did>
    </div>
</footer>
<!--Umas das principais funções é para chamar os scripts no footer do site-->
<?php wp_footer(); ?>
</body>
</html>