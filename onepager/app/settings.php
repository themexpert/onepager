<?php

class OpSettings{
	protected $config = array();

	public function __construct($name, $icon){
		$this->name = $name;

		onepager()->menu()->add(
			$name, //slug
			$name, //menu title
			$name, //page title
			'App\Controllers\AdminMenuController@getIndex',
			onepager()->url( 'dist/images/dashicon-onepager.svg' )
		);

		add_action('admin_enqueue_scripts', [$this, 'localizeScript']);
	}


	public function localizeScript(){
		if(get_current_screen()->id == "toplevel_page_".$this->name){			
			enqueueOnepagerAdminAssets();
			$config = $this->transformConfig($this->config);

			$onepager = onepager();

			$ajaxUrl   = $onepager->api()->getAjaxUrl();
			$nav_arr   = $onepager->content()->getMenus();
			$cat_arr   = $onepager->content()->getCategories();
			$pages_arr = $onepager->content()->getPages();

			$data = array(
				'ajaxUrl'    	=> $ajaxUrl,
				'config'     	=> $config,
				'page'     		=> $this->name,
				'menus'      	=> $nav_arr,
				'pages'      	=> $pages_arr,
				'categories' 	=> $cat_arr
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

	public function transformConfig($config){
		$transformer = new ThemeXpert\Onepager\Block\Transformers\FieldsTransformer;
		return $transformer->transform($config);
	}

	public function tab($tab, $config){
		$config = array_map(function($field) use ($tab){
			$field['tab'] = $tab;

			return $field;
		}, $config);

		$this->config = array_merge($this->config, $config);
	}
}

$page = new OpSettings(
	"onepager", 
	onepager()->url( 'dist/images/dashicon-onepager.svg' )
);

$page->tab("General", array(
	array("name"=>"title"),
	array("name"=>"type")
));

$page->tab("Options", array(
	array("name"=>"title 1"),
	array("name"=>"type 1")
));
