	
	
	
	<footer>
		<div class="footer">
       	<nav>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu_rodape'
					)
				);
			?>
		</nav>
      </div>
	</footer>	

	<?php wp_footer(); ?>
</body>
</html>