<?php namespace ThemeXpert\Providers\WordPress;

use ThemeXpert\Providers\Contracts\AssetInterface;

class Asset implements AssetInterface
{
  protected $scripts = array();
  protected $styles = array();
  protected $localize = array();

  public function script($name, $src = false, $dependency = [], $version = 1, $footer = true)
  {
    $this->scripts[$name] = array(
      "name"       => $name,
      "src"        => $src,
      "dependency" => $dependency,
      "version"    => $version,
      "footer "    => $footer,
    );
  }

  public function style($name, $src = false, $dependency = [], $version = 1, $media = 'all')
  {
    $this->styles[$name] = array(
      "name"       => $name,
      "src"        => $src,
      "dependency" => $dependency,
      "version"    => $version,
      "media "     => $media
    );
  }

  public function enqueueScripts()
  {
    array_map(function ($script) {
      call_user_func_array('wp_enqueue_script', $script);
    }, $this->scripts);
  }

  public function enqueueStyles()
  {
    array_map(function ($style) {
      call_user_func_array('wp_enqueue_style', $style);
    }, $this->styles);
  }

  public function enqueueLocalizations(){
    array_map(function ($loc) {
      call_user_func_array('wp_localize_script', $loc);
    }, $this->localize);
  }

  public function enqueue(){
    $this->enqueueStyles();
    $this->enqueueScripts();
    $this->enqueueLocalizations();
  }

  public function compileStyles()
  {
    $compiled = array_map(function($style){
      return file_get_contents($style['src']);
    }, $this->styles );

    return implode(" ", $compiled);
  }

  public function localizeScript($name, $data, $handle = "")
  {
    $this->localize[$name] = array(
      "handle"=>$handle, "name"=>$name, "data"=>$data
    );
  }

  /**
   * @return array
   */
  public function getScripts()
  {
    return $this->scripts;
  }

  /**
   * @return array
   */
  public function getStyles()
  {
    return $this->styles;
  }

}
