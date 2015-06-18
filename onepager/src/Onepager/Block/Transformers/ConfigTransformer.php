<?php namespace ThemeXpert\Onepager\Block\Transformers;

class ConfigTransformer {
  public function __construct( $settingsTransformer, $fieldsTransformer ) {
    $this->settingsTransformer = $settingsTransformer;
    $this->fieldsTransformer   = $fieldsTransformer;
  }

  public function transform( $config, $file, $url ) {
    $default_image = "block.jpg";
    $default_view  = "view.php";
    $default_style = "style.php";

    $dir      = dirname( $file ) . DIRECTORY_SEPARATOR;

    //configurations we want
    $slug       = $config['slug'];

    $groups     = $this->get( $config, 'groups', [ ] );
    $name       = $this->get( $config, 'name', ucfirst( $config['slug'] ) );
    $livemode   = $this->get( $config, 'livemode', array( "[data-animated], .animated, .wow" => [ 'animated', 'wow' ] ) );

    //files
    $view_file  = $dir . $this->get( $config, 'view', $default_view );
    $style_file = $dir . $this->get( $config, 'style', $default_style );

    $image      = trailingslashit( $url ) . $this->get( $config, 'image', $default_image );

    //closures
    $init       = $this->get( $config, 'init', false );
    $enqueue    = $this->get( $config, 'assets', false );

    //fields
    $contents   = $this->fieldsTransformer->transform( $this->get( $config, 'contents', [ ] ) );
    $settings   = $this->fieldsTransformer->transform( $this->get( $config, 'settings', [ ] ) );
    $styles     = $this->fieldsTransformer->transform( $this->get( $config, 'styles', [ ] ) );

    return compact(
      'url',
      'slug',
      'init',
      'livemode',
      'enqueue',
      'name',
      'groups',

      'image',
      'style_file',
      'view_file',
      
      'settings',
      'contents',
      'styles'
    );
  }

  public function get( $arr, $key, $default ) {
    return array_key_exists( $key, $arr ) ? $arr[ $key ] : $default;
  }
}
