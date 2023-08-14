<footer>

<div class="container">
    <div class="row">
        <div class="col-md-3">
        <p>Copyright</p>
        </div>

        <div class="col-md-9">
            <nav class="menu-footer">
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu_secudario'
                        )
                    );
                ?>
            </nav>
        </div>

    </div>
</div>


   
</footer>    
<?php wp_footer(); ?>
</body>
</html>