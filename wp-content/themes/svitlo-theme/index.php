<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php get_header(); ?>

<div id="content">
    <h1>Welcome to Svitlo Theme</h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
