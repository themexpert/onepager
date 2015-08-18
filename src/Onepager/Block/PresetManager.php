<?php namespace ThemeXpert\Onepager\Block;

use ThemeXpert\FileSystem\FileSystem as FS;
use ThemeXpert\Onepager\Block\Transformers\ConfigTransformer;

class PresetManager {
  protected $templates;
  protected $paths;
  protected $ignoredGroups = array();

  public function loadAllFromPath($path, $url, $groups = array()) {
    $this->paths[] = compact("path", "url", "groups");
  }

  public function add($file, $url, $groups = array()) {
    $config = json_decode(file_get_contents($file), true);
    if (!is_array($config)) {
      return;
    }

    $filename = basename($file);

    if (!array_key_exists('screenshot', $config)) {
      $imageName            = str_replace('.json', '.jpg', $filename);
      $config['screenshot'] = trailingslashit($url) . $imageName;
    }

    if (!array_key_exists('group', $config)) {
      $config['group'] = [];
    }

    if (!is_array($config['group'])) {
      $config['group'] = (array)$config['group'];
    }

    $config['group'] = array_merge($config['group'], (array) $groups);

    $config['id'] = $filename;

    $this->templates[] = $config;
  }

  public function loadAll() {
    foreach ($this->paths as $path) {
      $files = array_filter(FS::files($path['path']), function ($file) {
        return substr($file, -4, strrpos($file, '.json')) === "json";
      });

      foreach ($files as $file) {
        $config_file = untrailingslashit($path['path']) . DIRECTORY_SEPARATOR . $file;
        $this->add($config_file, $path['url'], $path['groups']);
      }
    }
  }

  public function all() {
    $this->loadAll();
    $ignoredGroups = $this->getIgnoredGroups();

    return array_filter($this->templates, function ($template) use ($ignoredGroups) {
      return !count(array_intersect($template['group'], $ignoredGroups));
    });
  }

  /**
   * @return array
   */
  public function getIgnoredGroups() {
    return $this->ignoredGroups;
  }

  /**
   * @param array $ignoredGroups
   */
  public function setIgnoredGroups($ignoredGroups) {
    $this->ignoredGroups = (array)$ignoredGroups;
  }
}
