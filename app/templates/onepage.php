<?php /* Template Name: OnePager */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<div class="op-sections">
  <?php the_content(); ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
