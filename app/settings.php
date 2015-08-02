<?php
// this file should be in the theme

Onepager::getOptionPanel()->tab('general', 'Generals')
        ->add(
          array('name' => 'favicon', 'type' => 'image'),
          array(
            'name'  => 'google_analytics',
            'type'  => 'textarea',
            'label' => 'Google Analytics',
            'placeholder' => 'Paste your code here'
          )
          // array(
          //   'name' => 'full_screen',
          //   'type' => 'switch',
          //   'label' => 'Full Screen Page',
          // )
        );
Onepager::getOptionPanel()->tab('styles', 'Styles')
        ->add(
        // array(
        //   'name' => 'gloabl_palette',
        //   'type' => 'colorpalette',
        //   'colors' => array(
        //     'primary'=> "#69D2E7",
        //     'secondary' => '#A7DBD8',
        //     'accent1' => '#FA6900',
        //     'accent2' => '#F38630'
        //   )
        // ),
        array(
          'name' => 'primary_color',
          'type' => 'colorpicker',
          'label' => 'Primary Color',
          'value' => '#2196F3'
        ),
        array(
          'name' => 'secondary_color',
          'type' => 'colorpicker',
          'label' => 'Secondary Color',
          'value' => '#3F51B5'
        ),
        array(
          'name' => 'accent_color',
          'type' => 'colorpicker',
          'label' => 'Secondary Color',
          'value' => '#FF5722'
        )
      );


add_action('wp_head', function(){
  // Favicion
  echo '<link rel="icon" href="'. Onepager::getOption('favicon') .'">';

  // Google Analytics
  echo Onepager::getOption('google_analytics');

  // Full pager
  if( Onepager::getOption('full_screen') ){
    echo '<script>
            jQuery(document).ready(function() {
              jQuery(".op-sections").fullpage({
                  sectionSelector: ".op-section",
                  css3: true,
                  scrollingSpeed: 100,
                  scrollBar: true
              });
            });
          </script>';
  }

});

if( Onepager::getOption('full_screen') ){

  add_action('wp_enqueue_scripts', function(){
    $q = onepager()->asset();
    // Full page
    // $q->script( 'op-easings', asset( 'assets/js/jquery.easings.min.js' ) );
    $q->script( 'op-slimscroll', asset( 'assets/js/jquery.slimscroll.min.js' ) );
    $q->script( 'op-fullpage', asset( 'assets/js/jquery.fullPage.js' ) );

    $q->style( 'op-fullpage', asset( 'assets/css/jquery.fullPage.css' ) );
  });

}
