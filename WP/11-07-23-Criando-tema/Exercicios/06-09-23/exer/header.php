<div class="header-bg">
    
        <header role="banner">
	
			<hgroup class="site-name one-third left">
				<!-- site name and description - site name is inside a div element on all pages except the front page and/or main blog page, where it is in a h1 element -->
				<h1 id="site-title" class="one-half-left">
					<?php if ( is_singular( array( 'rmcc_landing', 'rmcc_signup') )  || is_page_template( 'page-tripwire.php' ) ) {
						bloginfo( 'name' );
					} 
					else { ?>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					<?php } ?>
				</h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>
	
			<div class="right two-thirds">
				<!-- This area is by default in the top right of the header. It contains contact details and is also where you might add social media or RSS links -->
				
				<?php if ( ! is_singular(array( 'rmcc_landing', 'rmcc_signup' ) ) && ! is_page_template( 'page-tripwire.php' ) ) { ?>
					<a class="toggle-nav" href="#">&#9776;</a>
				<?php } ?>
				
				<!-- navigation menu -->
				<?php if ( ! is_singular(array( 'rmcc_landing', 'rmcc_signup' ) ) && ! is_page_template( 'page-tripwire.php' ) ) { ?>
					<nav class="menu main right">
						<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'compass' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
						<?php wp_nav_menu( array( 'container_class' => 'main-nav', 'theme_location' => 'primary' ) ); ?>
					</nav><!-- .main -->
	            <?php } ?>
				
			</div> <!-- .one-half right -->
		
		</header><!-- header -->
		
	</div><!-- header-bg-->