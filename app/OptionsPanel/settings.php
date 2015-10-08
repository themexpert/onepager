<?php
// this file should be in the theme
Onepager::getOptionPanel()
        ->tab( 'general', 'Generals' )
        ->add(
          array(
            'name'   => 'section_title_size',
            'label'  => 'Section Title Size',
            'append' => 'px',
            'value'  => '44',
          ),
          array( 'name' => 'favicon', 'type' => 'image' ),
          array(
            'name'        => 'google_analytics',
            'type'        => 'textarea',
            'label'       => 'Google Analytics',
            'placeholder' => 'Paste your code here',
          )
        )
        ->tab( 'styles', 'Styles' )
        ->add(
          array(
            'name'    => 'color',
            'type'    => 'colorpalette',
            'presets' => 'default',
            'value'   => array(
              'primary'   => "#1565c0",
              'secondary' => '#0a3d78',
              'accent'    => '#E64A19',
            ),
          )
        )
        ->tab( 'advanced' )
        ->add(
          array( 'name' => 'onepager_debug', 'label' => 'Development Mode', 'type' => 'switch', 'value' => false )
        );

// Onepager::basePreset( array(
//   'primary'   => "#1565c0",
//   'secondary' => '#0a3d78',
//   'accent'    => '#E64A19',
// ) );
//
// Onepager::addPresets( "default", array(
//   [ 'primary' => 'red', 'secondary' => 'yellow' ],
//   [ 'primary' => 'green', 'secondary' => 'yellow' ],
// ) );

add_action( 'wp_head', function () { ?>
  <link rel="icon" href="<?php echo Onepager::getOption( 'favicon' ) ?>">

  <!--  Google Analytics-->
  <?php echo Onepager::getOption( 'google_analytics' ); ?>

  <!--  Full pager-->
  <?php if ( Onepager::getOption( 'full_screen' ) ): ?>
    <script>
      jQuery(document).ready(function ($) {
        $(".op-sections").fullpage({
          sectionSelector: ".op-section",
          css3: true,
          scrollingSpeed: 100,
          scrollBar: true
        });
      });
    </script>
  <?php endif; ?>
<?php }, 100 );


if ( Onepager::getOption( 'full_screen' ) ) {
  add_action( 'wp_enqueue_scripts', function () {
    $q = onepager()->asset();
    $q->script( 'op-slimscroll', op_asset( 'assets/js/jquery.slimscroll.min.js' ) );
    $q->script( 'op-fullpage', op_asset( 'assets/js/jquery.fullPage.js' ) );

    $q->style( 'op-fullpage', op_asset( 'assets/css/jquery.fullPage.css' ) );
  } );
}
