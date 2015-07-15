<?php namespace ThemeXpert\Providers\Wordpress;

use ThemeXpert\Providers\Contracts\OptionsPanelInterface;
use ThemeXpert\Onepager\Block\Transformers\FieldsTransformer;

class OptionsPanel implements OptionsPanelInterface{
	protected $options = array();
	protected static $panels = [];
  protected $flatOptions;

  public static function getInstance($menuSlug){
		if(!array_key_exists($menuSlug, self::$panels)){
			self::$panels[$menuSlug] = new self($menuSlug);
		}

		return self::$panels[$menuSlug];
	}

	public function __construct($menuSlug){
		$this->menuSlug = $menuSlug;

		add_action('admin_enqueue_scripts', [$this, 'localizeScript']);
	}

	public function addMenuPage($pageTitle, $menuTitle, $iconUrl, $position=null){
		add_action('admin_menu', function() use ($pageTitle, $menuTitle, $iconUrl, $position){
			add_menu_page(
				$pageTitle,
				$menuTitle,
				'edit_theme_options',
				$this->menuSlug,
				[$this, 'printMountNode'],
				$iconUrl,
				$position
			);
		});
	}

	public function addSubMenuPage($parentSlug, $pageTitle, $menuTitle){
		add_action('admin_menu', function() use ($parentSlug, $pageTitle, $menuTitle){
			add_submenu_page(
				$parentSlug,
				$pageTitle,
				$menuTitle,
				'edit_theme_options',
				$this->menuSlug,
				[$this, 'printMountNode']
			);
		});
	}

	public function printMountNode(){
		echo '<div id="onepager-settings-mount"></div>';
	}

	public function isOptionsPanel(){
		return endsWith(get_current_screen()->id, "_page_".$this->menuSlug);
	}

	public function localizeScript(){
		if(!$this->isOptionsPanel()) return;

		enqueueOnepagerAdminAssets();

		$optionPanel 	= $this->getOptions();
		$savedOptions = get_option($this->menuSlug);
		$onepager 		= onepager();

		$data = array(
			'optionPanel' => $optionPanel,
			'options'			=> $savedOptions,
			'page'     		=> $this->menuSlug,

			'ajaxUrl'    	=> $onepager->api()->getAjaxUrl(),
			'menus'      	=> $onepager->content()->getMenus(),
			'pages'      	=> $onepager->content()->getPages(),
			'categories' 	=> $onepager->content()->getCategories()
		);

		wp_localize_script("admin-bundle", "onepager", $data);
	}

	public function get( $menuSlug, $index ) {
		$options = $this->all( $menuSlug );

		return ( array_key_exists( $index, $options ) ) ? $options[ $index ] : null;
	}

  public function getOption($name, $default=""){
    if ( ! $this->flatOptions ) {
      $options = get_option( $this->menuSlug, true );

      if(!$options || !is_array($options)) {
        $this->flatOptions = array();
      } else {
        $this->flatOptions = call_user_func_array('array_merge', $options);
      }
    }

    //get default value
    return (array_key_exists($name, $this->flatOptions)) ? $this->flatOptions[$name] : $default;
  }

	public function all( $menuSlug ) {
		if ( ! $this->options ) {
			$this->options = get_option( $this->menuSlug, true );
		}

		return ! empty( $this->options ) ? $this->options : [ ];
	}

	public function set( $menuSlug, $index, $option ) {
		$options           = $this->all( $menuSlug );
		$options[ $index ] = $option;


		if ( $option ) {
			return $this->save( $slug, $options );
		}

		return false;
	}

	public function save( $slug, $options ) {
		return update_option ( $slug, $options );
	}

	public function transformOptions($options){
		$transformer = new FieldsTransformer;
		return $transformer->transform($options);
	}

	public function tab($id, $name=null){
		$this->tabId = $id;
		$this->tabName = $name ? : ucfirst($id);
		return $this;
	}

	public function add(){
		//if tab does not exist create one
		if(!array_key_exists($this->tabId, $this->options)){
			$this->options[$this->tabId] = array(
				"name"=>$this->tabName,
				"id"=>$this->tabId,
				"icon"=> "TODO: icon",
				"fields"=> array()
			);
		}

		$this->options[$this->tabId]['fields'] = array_merge(
			$this->options[$this->tabId]['fields'],
			func_get_args()
		);

		return $this;
	}

	public function getOptions(){
		return array_map(function($options){
				$options['fields'] = $this->transformOptions($options['fields']);

				return $options;
			}, $this->options);
	}
}
