<?php

class OpSettings{
	protected $options = array();

	public function __construct($name, $icon){
		$this->name = $name;

		onepager()->menu()->add(
			$name, //slug
			$name, //menu title
			$name, //page title
			'App\Controllers\AdminMenuController@getIndex',
			$icon
		);

		add_action('admin_enqueue_scripts', [$this, 'localizeScript']);
	}


	public function localizeScript(){
		if(get_current_screen()->id == "toplevel_page_".$this->name){
			enqueueOnepagerAdminAssets();

			$optionPanel 	= $this->getOptions();
			$savedOptions = get_option($this->name);
			$onepager 		= onepager();

			$data = array(
				'optionPanel' => $optionPanel,
				'options'			=> $savedOptions,
				'page'     		=> $this->name,
				
				'ajaxUrl'    	=> $onepager->api()->getAjaxUrl(),
				'menus'      	=> $onepager->content()->getMenus(),
				'pages'      	=> $onepager->content()->getPages(),
				'categories' 	=> $onepager->content()->getCategories()
			);

			wp_localize_script("admin-bundle", "onepager", $data);
		}
	}

	public function get( $page, $index ) {
		$options = $this->all( $page );

		return ( array_key_exists( $index, $options ) ) ? $options[ $index ] : null;
	}

	public function all( $page ) {
		if ( ! $this->options ) {
			$this->options = get_option( $page, true );
		}

		return ! empty( $this->options ) ? $this->options : [ ];
	}

	public function set( $page, $index, $option ) {
		$options           = $this->all( $page );
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
		$transformer = new ThemeXpert\Onepager\Block\Transformers\FieldsTransformer;
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
				"fields"=> []
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

$onepagerAdminPage = new OpSettings(
	"onepager",
	onepager()->url( 'assets/images/dashicon-onepager.svg' )
);


$onepagerAdminPage
->tab("general", "General")
->add(
	array("name"=>"title"),
	array("name"=>"type")
)
->tab("options", "Options")
->add(
	array("name"=>"title 1"),
	array("name"=>"type 1")
);

// pd($opAdminPage->getOptions());
