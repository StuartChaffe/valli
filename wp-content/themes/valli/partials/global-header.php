<header class="global-header">
	<div class="global-header__inner">
		<div class="global-header__top">
			<div class="global-header__top--tel font-display"><a class="btn hidedesktop" href="tel:01484 533730">Call now</a><a class="hidemobile" href="tel:01484 533730"><p>Call today <span>01484 533730</span></p></a></div>
			<h1 class="global-header__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Valli Opticians Logo" /></a></h1>
			<a href="" class="btn btn--primary"><span class="hidedesktop">Book now</span> <span class="hidemobile">Book an appointment</span></a>
		</div>
		<nav class="global-header__nav">
			<?php wp_nav_menu( array('theme_location' => 'primary', 'container'=> false, ) ); ?>
		</nav>
	</div>
</header>

<div class="mobile-menu">
	<nav class="mobile-menu__nav">
		<button class="mobile-nav__btn" data-toggle="#mobile-menu" data-toggle-body-class="popover-active" aria-label="Toggle useful links menu" aria-expanded="false" aria-controls="mobile-popover-menu">
			<span>Main menu</span> <svg class="icon icon--arrow"><use xlink:href="#arrow"></use></svg>
		</button>
		<div class="popover-menu" id="mobile-menu">
			<div class="popover-menu__inner">
				<?php
					wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => 'nav',
					'container_class' => 'popover-menu__nav',
					'menu_class' => 'popover-nav'
				));
				?>
			</div>
		</div>
	</nav>
</div>

