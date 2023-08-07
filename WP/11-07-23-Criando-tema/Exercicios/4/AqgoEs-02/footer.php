<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">CopyRight</div>
            <div class="col-md-6 menu-footer text-end">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu_segudario'
                        )
                    );

                ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>