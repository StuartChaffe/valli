<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<?php include("blocks/banner.php"); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>