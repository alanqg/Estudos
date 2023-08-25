<footer>
   <div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Copyright</h3>
            <p>
                Desenvolvido por: <span>AqGoEs</span>
            </p>
        </div>
        <div class="col-md-8">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-rodape'
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