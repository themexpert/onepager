<?php namespace App\Loaders;

use ThemeXpert\Onepager\Block\BlockManager;

class BlocksLoader {
  protected $blockManager;

  public function __construct( BlockManager $blockManager ) {
    $this->blockManager = $blockManager;
    add_action( 'plugins_loaded', [ $this, 'loadOnepagerBlocks' ] );
    add_action( 'after_setup_theme', [ $this, 'loadThemeBlocks' ] );
    add_action( 'plugins_loaded', [ $this, 'setGroupOrder' ] );
  }

  public function loadOnepagerBlocks() {
    //default group added to the blocks (optional array)
    $groups = "onepager";

    $this->blockManager->loadAllFromPath(
      ONEPAGER_BLOCKS_PATH, ONEPAGER_BLOCKS_URL, $groups );
  }

  public function loadThemeBlocks() {
    //default group added to the blocks (optional array)
    $groups = "theme";

    $dir = ONEPAGER_THEME_PATH . "/blocks";
    $url = ONEPAGER_THEME_URL . "/blocks";

    if ( ! file_exists( $dir ) ) {
      return;
    }

    $this->blockManager->loadAllFromPath( $dir, $url, $groups );
  }

  public function setGroupOrder() {
    $order = array(
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
      "theme",
    );

    //FIXME: need a way to filter it
    $this->blockManager->setGroupOrder( $order );
  }
}
