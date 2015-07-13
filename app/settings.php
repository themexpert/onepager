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
          ),
          array(
            'name' => 'full_screen',
            'type' => 'switch',
            'label' => 'Full Screen Page',
          )
        );


add_action('wp_head', function(){
  echo Onepager::getOption('google_analytics');
});