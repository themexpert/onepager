<?php /* Template Name: OnePager */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php if ( ! current_theme_supports( 'title-tag' ) ) : ?>
      <title><?php echo wp_get_document_title(); ?></title>
    <?php endif; ?>
    <?php wp_head(); ?>
    <?php
    // Keep the following line after `wp_head()` call, to ensure it's not overridden by another templates.
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
  </head>

  <body <?php body_class(); ?> >

    <div class="op-sections">
      <?php the_content(); ?>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
