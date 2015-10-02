<?php namespace App\Loaders;


class PresetsLoader {
  protected $presetManager;

  public function __construct( $presetManager ) {
    $this->presetManager = $presetManager;

    add_action( 'admin_init', [ $this, 'onepagerPresetsLoader' ] );
    add_action( 'admin_init', [ $this, 'themePresetsLoader' ] );
  }

  public function onepagerPresetsLoader() {
    $groups = "onepager";

    $this->presetManager->loadAllFromPath(
      ONEPAGER_PRESETS_PATH, ONEPAGER_PRESETS_URL, $groups );
  }

  public function themePresetsLoader() {
    $groups = [$this->getCurrentThemeBlocksGroup()];

    $dir = ONEPAGER_THEME_PATH . "/presets";
    $url = ONEPAGER_THEME_URL . "/presets";

    if ( ! file_exists( $dir ) ) {
      return;
    }

    $this->presetManager->loadAllFromPath( $dir, $url, $groups );
  }

  /**
   * @return string
   */
  private function getCurrentThemeBlocksGroup() {
    $currentTheme = wp_get_theme();
    return $currentTheme->get( 'Name' ) . " (theme)";
  }
}
