<?php namespace App\Loaders;

use ThemeXpert\WordPress\PageTemplater;

class TemplateLoader {

  protected $pageTemplateManager;

  public function __construct( PageTemplater $pageTemplateManager ) {
    $this->pageTemplateManager = $pageTemplateManager;

    add_action( 'wp_loaded', [ $this, 'loadOnepagerPageTemplates' ] );
    add_action( 'wp_loaded', [ $this, 'loadOnepagerPageDefaultTemplates' ] );
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
    $onepager_canvas = locate_template( 'onepager/onepage.php' ) ?:
      onepager()->path( "/app/templates/onepage.php" );

    $this->pageTemplateManager->addTemplate( 'Onepager Canvas', $onepager_canvas );

    // Any filename start with onepager*- will work from JS
    $onepager_default = locate_template( 'onepager/onepager-default.php' ) ?:
    onepager()->path( "/app/templates/onepager-default.php" );

    $this->pageTemplateManager->addTemplate( 'Onepager Default', $onepager_default );
    
  }

  public function loadOnepagerPageDefaultTemplates(){
    
  }

  /**
   * @return mixed
   */
  protected function isBuildMode() {
    return onepager()->content()->isBuildMode();
  }

}
