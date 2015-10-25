<?php namespace App\Loaders;

use ThemeXpert\WordPress\PageTemplater;

class TemplateLoader {

  protected $pageTemplateManager;

  public function __construct( PageTemplater $pageTemplateManager ) {
    $this->pageTemplateManager = $pageTemplateManager;

    add_action( 'wp_loaded', [ $this, 'loadOnepagerPageTemplates' ] );
    //9999999999 is a very big number to make sure that builder.php loads whatever happens
    add_filter( 'template_include', [ $this, 'loadBuildModeTemplate' ], 9999999999);
  }

  public function loadBuildModeTemplate( $template ) {
    if ( $this->isBuildMode() ) {
      return onepager()->path( "app/templates/builder.php" );
    } else {
      return $template;
    }
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

  /**
   * @return mixed
   */
  protected function isBuildMode() {
    return onepager()->content()->isBuildMode();
  }

}
