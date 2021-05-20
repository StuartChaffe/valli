<header class="global-header">
	<div class="global-header__inner">
		<div class="global-header__top">
			<div class="global-header__top--tel font-display"><p>Call today <span><a href="tel:01484 533730">01484 533730</a></span></p></div>
			<h1 class="global-header__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Valli Opticians Logo" /></a></h1>
			<a href="" class="btn btn--primary">Book an appointment</a>
			<button class="global-header__menu-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">Mobile Menu</button>
		</div>
		<nav class="global-header__nav">
			<?php wp_nav_menu( array('theme_location' => 'primary', 'container'=> false, ) ); ?>
		</nav>
	</div>
</header>

<div class="mobile-menu" id="mobile-menu">
	<nav class="mobile-menu__nav">
		<button class="mobile-menu__close-btn" data-toggle="#mobile-menu" data-toggle-body-class="nav-open" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">Close Menu</button>
		<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
	</nav>
</div>
