<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php include("blocks/banner.php"); ?>
	<article>
		<aside>
			<h3 class="heading-2">About Valli</h3>
			<ul class="aside-filter">
				<li class="aside-filter__selected">
					<a href="" class="btn btn--small">About Valli Group</a>
				</li>
				<li>
					<a href="" class="btn btn--small">Reviews</a>
				</li>
				<li>
					<a href="" class="btn btn--small">News</a>
				</li>
				<li>
					<a href="" class="btn btn--small">Meet the team</a>
				</li>
			</ul>

			<hr />
			<h3>Archives</h3>
			<ul>
				<li>
					<a href="" class="">July 2020</a>
				</li>
				<li>
					<a href="" class="">April 2020</a>
				</li>
				<li>
					<a href="" class="">March 2020</a>
				</li>
				<li>
					<a href="" class="">November 2019</a>
				</li>
				<li>
					<a href="" class="">October 2019</a>
				</li>
				<li>
					<a href="" class="">September 2019</a>
				</li>
				<li>
					<a href="" class="">July 2019</a>
				</li>
				<li>
					<a href="" class="">May 2019</a>
				</li>
			</ul>
		</aside>
		<main>
			<div class="mobile-menu">
				<nav class="mobile-menu__nav">
					<button class="mobile-nav__btn" data-toggle="#mobile-menus" data-toggle-body-class="popover-active" aria-label="Toggle Menu" aria-expanded="false">
						<span>About Valli</span> <svg class="icon icon--arrow"><use xlink:href="#arrow"></use></svg>
					</button>
					<div class="popover-menu" id="mobile-menus">
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
			<h2>About Valli Group</h2>


			<img class="alignright" src="<?php echo get_template_directory_uri(); ?>/assets/images/samples/about.png')" alt="about" />
			<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum dui eget sapien auctor venenatis. Quisque laoreet sem nec magna pellentesque venenatis.</strong></p>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum aliquam leo sed eros dictum, maximus placerat ante semper. Nulla laoreet convallis nibh a consectetur.</p>
			<a href="" class="btn btn--primary btn--small">Read more about Valli group</a>

			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/samples/about-large.png')" alt="about" />
			<p><strong>We really care about your eyes. That’s why we aim to make our appointments longer and more frequent than most and invest in the latest technology to provide the very best in eye care.</strong></p>
			<p>Our eye tests take up to 45 minutes and offer a comprehensive examination of your eyes, vision and general health. They are tailored to your individual needs and as well as checking your vision can identify other health conditions including the early onset of:</p>
			<ul>
				<li>Diabetes</li>
				<li>High cholesterol and blood pressure</li>
				<li>MS</li>
				<li>Alzheimer’s</li>
				<li>Glaucoma</li>
				<li>Cataracts</li>
				<li>Age-related Macular Degeneration</li>
			</ul>
			<p>We are able to offer a full eye scan using the latest OCT (Optical Coherence Tomographer). This allows us to see all the layers of the eye and can detect certain eye conditions and health issues before symptoms are even present.  Please ask for more details when booking an appointment.</p>
			<p>We are registered to provide NHS occular emergency appointments for sudden new problems with your eyes for example red eye, sudden vision change, itchy eyes, sore eyes and all manner of eye conditions. These appointments are free of charge through the NHS.</p>
			<p>To book an appointment or find out more please <a href="">contact us</a>.</p>

			<hr />

			<h3 class="heading-2">Reviews</h3>
			<?php include("blocks/review.php"); ?>
			<a href="" class="btn btn--primary btn--small">Read more reviews</a>

			<?php include("blocks/ad.php"); ?>

			<hr />

			<h3 class="heading-2">News</h3>
			<?php include("blocks/news.php"); ?>

			<hr />

			<h3 class="heading-2">Meet the team</h3>
			<?php include("blocks/team.php"); ?>

			<hr />

			<h3 class="heading-2">Frequently Asked Questions</h3>
			<?php include("blocks/accordion.php"); ?>

		</main>
	</article>
	<?php include("blocks/brands.php"); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>