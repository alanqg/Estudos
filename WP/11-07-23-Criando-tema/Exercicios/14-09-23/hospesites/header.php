<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>aqgoes</title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="header">
	<h1>My Website</h1>
	<p>Resize the browser window to see the effect.</p>
	</div>

      <div class="topnav">
		  
	  		<nav>	
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu_principal'
						)
					);
				?>
	  		</nav> 
        <div class="search">
          <a href="#">Link</a>
        </div>
      </div>	
