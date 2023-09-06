<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4"><h2>Copyright</h2></div>
        </div>

        <nav>
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'menu-rodape'
                )
            ); ?>
        </nav>
    </div>
    <?php wp_footer(); ?>
</body>
</html>