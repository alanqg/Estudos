
<footer>
    <div class="container-footer">
        <div class="copyright">copyright</div>
        <nav>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu_footer'
                )
            );
        ?>
        </nav>
    </div>
</footer>
    <?php wp_footer(); ?>
</body>
</html>