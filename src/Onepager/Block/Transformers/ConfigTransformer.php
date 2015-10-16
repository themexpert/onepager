<?php namespace ThemeXpert\Onepager\Block\Transformers;

class ConfigTransformer {
  public function __construct( $fieldsTransformer ) {
    $this->fieldsTransformer = $fieldsTransformer;
  }

  public function transform( $config, $file, $url ) {
    //default file names
    //users can set different names though
    //this keeps boilerplate away
    $default_image = "block.jpg";
    $default_view  = "view.php";
    $default_style = "style.php";
    $config_file   = $file;

    //directory path of this block
    $dir = dirname( $file ) . DIRECTORY_SEPARATOR;

    //configurations we want
    //unique slug that is used to identify a block
    //boys make it unique
    $slug = $config['slug'];

    //used to categorize blocks
    $groups = $this->get( $config, 'groups', array() );

    //name could be anything defaults to slug
    $name = $this->get( $config, 'name', ucfirst( $config['slug'] ) );

    //this is quite a complex thing
    //as you see on live editing mode, the right side refreshes alot.
    //wow and other animated stuffs looks wired. so we remove them on live mode
    //so if you want a specific class on live mode you want to remove its here you do
    //for example you want to remove wow class from article  tag you do it this way
    //$removables = array("article" => [ 'wow' ] );
    $removables = array(
      "[data-animated], .animated, .wow" => array( 'animated', 'wow' ),
    );
    $livemode   = $this->get( $config, 'livemode', $removables );


    //get the view file path
    $view_file = $dir . $this->get( $config, 'view', $default_view );

    //get the internal stylesheet file
    $style_file = $dir . $this->get( $config, 'style', $default_style );

    //get the block image path
    if(file_exists(ONEPAGER_THEME_PATH."/overrides/".$slug."/block.jpg")){
      $image = trailingslashit( ONEPAGER_THEME_URL ) ."/overrides/".$slug."/block.jpg";
    } else {
      $image = trailingslashit( $url ) . $this->get( $config, 'image', $default_image );
    }


    //assets is a function
    //we enqueue our stylesheets and scripts here
    $enqueue = $this->get( $config, 'assets', false );

    //three different tabs.
    $contents = $this->fieldsTransformer->transform( $this->get( $config, 'contents', array() ) );
    $settings = $this->fieldsTransformer->transform( $this->get( $config, 'settings', array() ) );
    $styles   = $this->fieldsTransformer->transform( $this->get( $config, 'styles', array() ) );

    return compact(
      'url',
      'dir',
      'slug',
      'livemode',
      'enqueue',
      'name',
      'groups',

      'image',
      'style_file',
      'view_file',
      'config_file',

      'settings',
      'contents',
      'styles'
    );
  }

  public function get( $arr, $key, $default ) {
    return is_array( $arr ) && array_key_exists( $key, $arr ) ? $arr[ $key ] : $default;
  }
}
