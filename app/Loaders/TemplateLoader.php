<?php namespace App\Loaders;

use ThemeXpert\WordPress\PageTemplater;

class TemplateLoader {

  protected $pageTemplateManager;

  public function __construct( PageTemplater $pageTemplateManager ) {
    $this->pageTemplateManager = $pageTemplateManager;

    add_action( 'wp_loaded', [ $this, 'loadOnepagerPageTemplates' ] );
  }

  /**
   * if we have a onepage.php file in themes onepager directory
   * then load that template
   * Add page Templates
   */
  public function loadOnepagerPageTemplates() {
    $default_onepage_template = locate_template( 'onepager/onepage.php' ) ?:
      onepager()->path( "/app/templates/onepage.php" );

    $this->pageTemplateManager->addTemplate( 'OnePager', $default_onepage_template );
  }
}
