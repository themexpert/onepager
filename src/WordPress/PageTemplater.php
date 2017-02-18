<?php namespace ThemeXpert\WordPress;

class PageTemplater {
  /** * The array of templates that this plugin tracks. */
  protected $templates = array();

  public function addTemplate( $name, $file ) {
    $key                     = basename( $file );
    $this->templates[ $key ] = [ "name" => $name, "file" => $file, "key" => $key ];
  }

  public function __construct() {
    add_filter('theme_page_templates', array($this, 'add_page_template'));

    // Add a filter to the template include to determine if the page has our
    // template assigned and return it's path
    // check 999999 - its important
    add_filter( 'template_include', array( $this, 'view_project_template' ), 99999999 );
  }

  public function add_page_template($templates) {
	return array_merge(array_map(function($template) {
		return $template['name'];
	}, $this->templates), $templates);
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
