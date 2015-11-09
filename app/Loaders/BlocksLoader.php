<?php namespace App\Loaders;

use ThemeXpert\Onepager\Block\BlockManager;

class BlocksLoader {
  protected $blockManager;

  public function __construct( BlockManager $blockManager ) {
    $this->blockManager = $blockManager;
    add_action( 'init', [ $this, 'loadOnepagerBlocks' ], 999 );
    add_action( 'init', [ $this, 'loadThemeBlocks' ], 999 );
    add_action( 'init', [ $this, 'setGroupOrder' ], 999 );
  }

  public function loadOnepagerBlocks() {
    //default group added to the blocks (optional array)
    $groups = "Onepager (plugin)";

    $this->blockManager->loadAllFromPath(
      ONEPAGER_BLOCKS_PATH, ONEPAGER_BLOCKS_URL, $groups );
  }

  public function loadThemeBlocks() {
    //default group added to the blocks (optional array)
    $groups = [ $this->getCurrentThemeBlocksGroup() ];

    $dir = ONEPAGER_THEME_PATH . "/blocks";
    $url = ONEPAGER_THEME_URL . "/blocks";

    if ( ! file_exists( $dir ) ) {
      return;
    }

    $this->blockManager->loadAllFromPath( $dir, $url, $groups );
  }

  public function setGroupOrder() {
    $order = array(
      $this->getCurrentThemeBlocksGroup(),
      "navbars",
      "headers",
      "contents",
      "portfolios",
      "teams",
      "testimonials",
      "blogs",
      "sliders",
      "pricings",
      "footers",
    );

    //FIXME: need a way to filter it
    $this->blockManager->setGroupOrder( $order );
  }

  /**
   * @return string
   */
  private function getCurrentThemeBlocksGroup() {
    $currentTheme = wp_get_theme();

    return $currentTheme->get( 'Name' ) . " (theme)";
  }
}
