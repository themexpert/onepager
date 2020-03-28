<?php
// this file should be in the theme
Onepager::getOptionPanel()
		->tab( 'general', 'Generals' )
		->add(
			array(
				'name'   => 'section_title_size',
				'label'  => 'Section Title Size',
				'append' => 'px',
				'value'  => '',
            ),
            array(
                'name' => 'section_heading_font',
                'type' => 'font', 
                'label' => 'Section Title Fonts'
            ),
            array(
				'name'   => 'section_subtitle_size',
				'label'  => 'Section Subtitle Size',
				'append' => 'px',
				'value'  => '',
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
        'id' => 'op_settings_general',
        'title' => __('General', 'onepager')
    ],
    [
        'id' => 'op_setting_styles',
        'title' => __('Styles', 'onepager')
    ],
    [
        'id' => 'op_setting_advanced',
        'title' => __('Advanced', 'onepager')
    ]
];

$fields = [
    'op_settings_general' => [
        [
            'name' => 'section_title_size',
            'label' => __('Section Title Size', 'onepager'),
            'desc' => __('in px', 'onepager'),
            'type' => 'text',
            'default' => '44'
        ],
    ],
    'op_setting_styles' => [
        [
            'name' => 'primary',
            'label' => __('Primary Color', 'onepager'),
            'desc' => __('Font color', 'onepager'),
            'type' => 'color',
            'default' => '#fff'
        ],
        [
            'name' => 'seconday',
            'label' => __('Secondary Color', 'onepager'),
            'desc' => __('Font color', 'onepager'),
            'type' => 'color',
            'default' => '#fff'
        ],
        [
            'name' => 'accent',
            'label' => __('Accent Color', 'onepager'),
            'desc' => __('Font color', 'onepager'),
            'type' => 'color',
            'default' => '#fff'
        ],
    ],
    'op_setting_advanced' => [
        [
            'name' => 'google_analytics',
            'label' => __('Google Analytics', 'onepager'),
            'desc' => __('Please insert your code here', 'onepager'),
            'type' => 'textarea',
            'default' => ''
        ],
        [
            'name'  => 'onepager_debug',
            'label' => __( 'Debug', 'onepager' ),
            'desc'  => __( 'Debug Mode', 'onepager' ),
            'type'  => 'checkbox'
        ],
    ]
];

onepagerSettings($tab, $fields);