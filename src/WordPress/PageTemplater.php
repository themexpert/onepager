<?php namespace ThemeXpert\WordPress;

class PageTemplater {
  /** * The array of templates that this plugin tracks. */
  protected $templates = array();

  public function addTemplate( $name, $file ) {
    $key                     = basename( $file );
    $this->templates[ $key ] = [ "name" => $name, "file" => $file, "key" => $key ];
  }

  public function __construct() {
    // Add a filter to the attributes metabox to inject template into the cache.
    add_filter( 'page_attributes_dropdown_pages_args', array( $this, 'register_project_templates' ) );

    // Add a filter to the save post to inject out template into the page cache
    add_filter( 'wp_insert_post_data', array( $this, 'register_project_templates' ) );

    // Add a filter to the template include to determine if the page has our
    // template assigned and return it's path
    // check 999999 - its important
    add_filter( 'template_include', array( $this, 'view_project_template' ), 99999999 );
  }

  /**
   * Adds our template to the pages cache in order to trick WordPress
   * into thinking the template file exists where it doens't really exist.
   *
   * @param $attrs
   *
   * @return
   */
  public function register_project_templates( $attrs ) {
    // Create the key used for the themes cache
    $cache_key = $this->get_cache_key();

    // Retrieve the cache list.
    // If it doesn't exist, or it's empty prepare an array
    $templates = wp_get_theme()->get_page_templates();
    if ( empty( $templates ) ) {
      $templates = array();
    }

    // New cache, therefore remove the old one
    wp_cache_delete( $cache_key, 'themes' );

    // Now add our template to the list of templates by merging our templates
    // with the existing templates array from the cache.
    $ourTemplates = array_reduce( $this->templates, function ( $carry, $template ) {
      $carry[ $template['key'] ] = $template['name'];

      return $carry;
    }, array() );

    $templates = array_merge( $templates, $ourTemplates );

    // Add the modified cache to allow WordPress to pick it up for listing
    // available templates
    wp_cache_add( $cache_key, $templates, 'themes', 1800 );

    return $attrs;
  }

  /**
   * Checks if the template is assigned to the page
   * @param $template
   * @return
   */
  public function view_project_template( $template ) {
    global $post;

    //if its a 404 page then return default template
    if ( is_404() || is_search() ) {
      return $template;
    }

    $wp_page_template = get_post_meta( $post->ID, '_wp_page_template', true );

    if ( ! isset( $this->templates[ $wp_page_template ] ) ) {
      return $template;
    }

    //throw error if file does now exist
    $file = $this->templates[ $wp_page_template ]['file'];

    // Just to be safe, we check if the file exist first
    if ( file_exists( $file ) ) {
      return $file;
    } else {
      echo "$file does not exist";
    }

    return $template;
  }

  /**
   * get_raw_theme_root because wordpress can have multiple theme directories
   * @return string
   */
  protected function get_cache_key() {
    $dir = get_theme_root( get_stylesheet() ) . '/' . get_stylesheet();
    if(!startsWith($dir, "/")) $dir = WP_CONTENT_DIR . "/".$dir;

    return 'page_templates-' . md5( $dir );
  }
}
