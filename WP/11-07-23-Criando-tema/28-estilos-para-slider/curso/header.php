<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<!--Titulo do site foi para o arquivo functions.php padões wp do versão 4.0 ou superior-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="social-media-icons col-xl-9 col-sm-7 col-6">Ícones Sociais</div>
					<div class="search col-xl-3 col-sm-5 col-6 text-right">
						<?php get_search_form(); ?>
					</div>			
				</div>
			</div>
		</section>
		<section class="menu-area">
			<div class="container">
				<div class="row">
					<section class="logo col-md-2 col-12 text-center">Logo</section>
					<nav class="main-menu col-md-10 text-right">
						<?php 
						wp_nav_menu( 
							array( 
								'theme_location' => 'my_main_menu' 
							) 
						); 
						?>
					</nav>					
				</div>
			</div>
		</section>
	</header>