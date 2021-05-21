<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php include("blocks/image-text.php"); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>