<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(''); ?></title>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.svg" type="image/svg+xml">
<link rel="stylesheet" href="https://use.typekit.net/qyb1vmq.css">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="svg-sprite" style="height: 0; width: 0; position: absolute; visibility: hidden">
<?php include get_theme_file_path('assets/svg/sprite.php'); ?>
</div>

<div class="global-container">
<?php get_template_part( 'partials/global-alert' ); ?>
<?php get_template_part( 'partials/global-header' ); ?>
