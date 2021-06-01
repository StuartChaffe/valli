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
			<h2>About Valli Group</h2>
			<img class="alignright" src="<?php echo get_template_directory_uri(); ?>/assets/images/samples/about.png')" alt="about" />
			<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum dui eget sapien auctor venenatis. Quisque laoreet sem nec magna pellentesque venenatis.</strong></p>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum aliquam leo sed eros dictum, maximus placerat ante semper. Nulla laoreet convallis nibh a consectetur.</p>
			<a href="" class="btn btn--primary btn--small">Read more about Valli group</a>

			<hr />

			<h3 class="heading-2">Reviews</h3>
			<?php include("blocks/review.php"); ?>
			<a href="" class="btn btn--primary btn--small">Read more reviews</a>

			<hr />

			<h3 class="heading-2">News</h3>
			<?php include("blocks/news.php"); ?>

			<hr />

			<h3 class="heading-2">Meet the team</h3>
			<?php include("blocks/team.php"); ?>
		</main>
	</article>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>