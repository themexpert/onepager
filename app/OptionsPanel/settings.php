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
			)
		)
		->tab( 'styles', 'Styles' )
		->add(
			array(
				'name'    => 'color',
				'type'    => 'colorpalette',
				'presets' => 'default',
				'value'   => array(
					'primary'   => '#1565c0',
					'secondary' => '#0a3d78',
					'accent'    => '#E64A19',
				),
			)
		)
		->tab( 'advanced' )
		->add(
			array( 'name' => 'onepager_debug', 'label' => 'Development Mode', 'type' => 'switch', 'value' => false ),
			array(
				'name'        => 'google_analytics',
				'type'        => 'textarea',
				'label'       => 'Google Analytics',
				'placeholder' => 'Paste your code here',
			)
		);

// Onepager::basePreset( array(
// 'primary'   => "#1565c0",
// 'secondary' => '#0a3d78',
// 'accent'    => '#E64A19',
// ) );
//
// Onepager::addPresets( "default", array(
// [ 'primary' => 'red', 'secondary' => 'yellow' ],
// [ 'primary' => 'green', 'secondary' => 'yellow' ],
// ) );
add_action(
	'wp_head',
	function () { ?>
  <link rel="icon" href="<?php echo Onepager::getOption( 'favicon' ); ?>">

  <!--  Google Analytics-->
		<?php echo Onepager::getOption( 'google_analytics' ); ?>
		<?php
	},
	100
);


/**
 * onepager option panel settings
 */
$tab = [
    [
        'id' => 'global_settings',
        'title' => __('Global Settings', 'onepager')
    ],
    [
        'id' => 'meta_settings',
        'title' => __('Meta Settings', 'onepager')
    ]
];

$fields = [
    'global_settings' => [
        [
            'name' => 'text',
            'label' => __('Section Title Size', 'onepager'),
            'desc' => __('in px', 'onepager'),
            'type' => 'text',
            'default' => '44'
        ],
        [
            'name' => 'color',
            'label' => __('Color', 'onepager'),
            'desc' => __('Font color', 'onepager'),
            'type' => 'text',
            'default' => '#fff'
        ],
        [
            'name' => 'google_analytics',
            'label' => __('Google Analytics', 'onepager'),
            'desc' => __('Please insert your code here', 'onepager'),
            'type' => 'textarea',
            'default' => ''
        ],
    ],
    'meta_settings' => [
        [
            'name' => 'text',
            'label' => __('Title', 'onepager'),
            'desc' => __('Your website title', 'onepager'),
            'type' => 'text',
            'default' => 'OnePage Landing Page Builder'
        ],
    ]
];

onepagerSettings($tab, $fields);