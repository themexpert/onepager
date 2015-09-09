<?php namespace ThemeXpert\Providers\Wordpress;

use App\Assets\OptionsPanelScripts;
use ThemeXpert\Onepager\Block\Transformers\SerializedControlsConfigTransformer;
use ThemeXpert\Providers\Contracts\OptionsPanelInterface;
use ThemeXpert\Onepager\Block\Transformers\FieldsTransformer;

class OptionsPanel implements OptionsPanelInterface {
  protected static $panels = [ ];
  protected $options = array();
  protected $flatOptions;
  protected $tabId;
  protected $tabName;
  protected $merger;

  public static function getInstance( $menuSlug ) {
    if ( ! array_key_exists( $menuSlug, self::$panels ) ) {
      self::$panels[ $menuSlug ] = new self( $menuSlug );
    }

    return self::$panels[ $menuSlug ];
  }

  public function __construct( $menuSlug ) {
    $this->menuSlug = $menuSlug;

    add_action( 'admin_enqueue_scripts', [ $this, 'localizeScript' ] );
  }

  public function addMenuPage( $pageTitle, $menuTitle, $iconUrl, $position = null ) {
    add_action( 'admin_menu', function () use ( $pageTitle, $menuTitle, $iconUrl, $position ) {
      add_menu_page(
        $pageTitle,
        $menuTitle,
        'edit_theme_options',
        $this->menuSlug,
        [ $this, 'printMountNode' ],
        $iconUrl,
        $position
      );
    } );
  }

  public function addSubMenuPage( $parentSlug, $pageTitle, $menuTitle ) {
    add_action( 'admin_menu', function () use ( $parentSlug, $pageTitle, $menuTitle ) {
      add_submenu_page(
        $parentSlug,
        $pageTitle,
        $menuTitle,
        'edit_theme_options',
        $this->menuSlug,
        [ $this, 'printMountNode' ]
      );
    } );
  }

  public function printMountNode() {
    echo '<div id="onepager-settings-mount"></div>';
  }

  public function isOptionsPanel() {
    return endsWith( get_current_screen()->id, "_page_" . $this->menuSlug );
  }

  public function localizeScript() {
    if ( ! $this->isOptionsPanel() ) {
      return;
    }

    new OptionsPanelScripts();

    $optionPanel  = $this->getOptionsControls();
    $savedOptions = $this->getAllSavedOptions();
    $onepager     = onepager();

    $data = array(
      'optionPanel' => $optionPanel,
      'options'     => $savedOptions,
      'page'        => $this->menuSlug,
      'ajaxUrl'     => $onepager->api()->getAjaxUrl(),
      'menus'       => $onepager->content()->getMenus(),
      'pages'       => $onepager->content()->getPages(),
      'categories'  => $onepager->content()->getCategories(),
    );

    wp_localize_script( "admin-bundle", "onepager", $data );
  }

  public function getOption( $name, $default = "" ) {
    if ( ! $this->flatOptions ) {
      $this->flattenOptions();
    }

    //get default value
    return array_key_exists( $name, $this->flatOptions ) ? $this->flatOptions[ $name ] : $default;
  }

  public function update($options) {
    update_option( $this->menuSlug, $options );
    $this->flattenOptions();
  }

  protected function flattenOptions() {
    $options = $this->getAllSavedOptions();

    if ( ! $options || ! is_array( $options ) ) {
      $this->flatOptions = array();
    } else {
      $this->flatOptions = flatten_array( $options );
    }

  }

  protected function mergeOptions($data, $tabs) {
    $merger = new SerializedControlsConfigTransformer();
    $result = [];

    foreach ( $tabs as $tab ) {
      $result[$tab['id']] = $merger->mergePersistedDataAndConfigData(
        array_get($tab, 'fields', []),
        array_get($data, $tab['id'], [])
      );
    }

    return $result;
  }

  public function getAllSavedOptions() {
    $data = [];

    if ( $this->options ) {
      $data = get_option( $this->menuSlug, [] );

      $data = $this->mergeOptions($data, $this->getOptionsControls());
    }

    return ! empty( $data ) ? $data : [ ];
  }



  public function getOptionsControls() {
    $options = array_map( function ( $options ) {
      $options['fields'] = array_values( $this->transformOptions( $options['fields'] ) );

      return $options;
    }, $this->options );

    return $options;
  }

  public function transformOptions( $options ) {
    $transformer = new FieldsTransformer;

    return $transformer->transform( $options );
  }




  public function tab( $id, $name = null ) {
    $this->tabId   = $id;
    $this->tabName = $name ?: ucfirst( $id );

    return $this;
  }

  public function add() {
    //if tab does not exist create one
    if ( ! array_key_exists( $this->tabId, $this->options ) ) {
      $this->options[ $this->tabId ] = array(
        "name"   => $this->tabName,
        "id"     => $this->tabId,
        "icon"   => "TODO: icon",
        "fields" => array(),
      );
    }

    $fields  = &$this->options[ $this->tabId ]['fields'];
    $options = func_get_args();

    foreach ( $options as $option ) {
      $fields[ $option['name'] ] = $option;
    }

    return $this;
  }

}
