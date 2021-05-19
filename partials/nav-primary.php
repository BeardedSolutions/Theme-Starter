<nav id="nav-primary" class="navbar navbar-expand-lg py-2 px-4 position-absolute w-100">

	<a href="<?php echo esc_url( home_url( '/', 'https' ) ); ?>" 
	title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
	rel="home" class="navbar-brand">

		<img class="logo-primary" src="<?php the_field('dark_background_logo', 'option'); ?>" 
				alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span id="navbarToggle" class="navbar-toggler-icon"><span id="iconContainer"><i class="far fa-bars"></i></span></span>
  </button>
	<?php wp_nav_menu( array(
		'theme_location' => 'primary-menu',
		'menu_class' => 'navbar-nav ml-auto',
		'container_class' => 'collapse navbar-collapse',
		'container_id' => 'navbarSupportedContent',
		'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    	'walker'          => new WP_Bootstrap_Navwalker(),
		)
	 ); ?>
</nav>