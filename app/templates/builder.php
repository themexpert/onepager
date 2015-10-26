<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <title>Onepage builder - <?php wp_title(); ?></title>

  <?php wp_head(); ?>
  <style>
    body {
      overflow: hidden;
    }

    #onepager-builder {
      width: 23%;
      float: left;
    }

    #onepager-preview {
      width: 77%;
      margin-left: 23%;
    }

    #onepager-preview iframe {
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>

<div id="onepager-builder">
  <div class="app-loading flex flex-middle flex-center flex-column">
    <span class="loader"></span>
    <span class="title">Initializing Onepager</span>
  </div>
</div>
<div id="onepager-preview">
  <iframe src="<?php echo onepager_get_preview_url( get_current_page_url() ) ?>" frameborder="0"></iframe>
</div>

<?php wp_footer(); ?>
<script>
  jQuery("#onepager-preview").css("height", jQuery(window).height());

  jQuery(window).on("resize", function(){
    jQuery("#onepager-preview").css("height", jQuery(window).height());
  });
</script>
</body>
</html>
