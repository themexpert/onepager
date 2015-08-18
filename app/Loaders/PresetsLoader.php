<?php namespace App\Loaders;


class PresetsLoader {
  protected $presetManager;

  public function __construct( $presetManager ) {
    $this->presetManager = $presetManager;

    add_action( 'admin_init', [ $this, 'onepagerPresetsLoader' ] );
  }

  public function onepagerPresetsLoader() {
    $groups = "onepager";

    $this->presetManager->loadAllFromPath(
      ONEPAGER_PRESETS_PATH, ONEPAGER_PRESETS_URL, $groups );
  }
}
