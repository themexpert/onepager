<?php namespace ThemeXpert\Providers\WordPress;

use ThemeXpert\Providers\Contracts\ContentInterface;

/**
 * Class Content
 *
 * @package ThemeXpert\Providers\WordPress
 */
class Content implements ContentInterface {
  /**
   * @return array
   */
  public function getPages() {
    return ["Select"] + obj_to_array(get_pages(), 'ID', 'post_title');
  }

  /**
   *
   */
  public function getPosts() {
    // TODO: Implement getPosts() method.
  }

  /**
   * @return array
   */
  public function getMenus() {
    return ["Select"] + obj_to_array(get_terms('nav_menu', array('hide_empty' => 0)), 'term_id', 'name');
  }

  /**
   * @return array
   */
  public function getCategories() {
    return ["select"] + obj_to_array(get_terms('category', array('hide_empty' => 0)), 'term_id', 'name');
  }

  /**
   *
   */
  public function getMenuLocations() {
    // TODO: Implement getMenuLocations() method.
  }

  public function isBuildMode() {
    return is_super_admin() && $this->isOnepage() && (array_key_exists('onepager', $_GET) ? (int)$_GET['onepager'] : 0);
  }

  public function isOnepagerByTemplate($pageId = null) {
    if (!$pageId) {
      $pageId = $this->getCurrentPageId();
    }

    $template = get_post_meta($pageId, '_wp_page_template', true);

    //template name is onepage.php or op-*.php
    return ($template == "onepage.php" || substr($template, 0, 3) == "op-") ? true : false;
  }

  public function isOnepagerByMeta() {
    $onepager = get_post_meta($this->getCurrentPageId(), '_onepager_updated', true);

    return $onepager ? true : false;
  }

  public function isOnepage($pageId = null) {
    if (!$pageId) {
      $pageId = $this->getCurrentPageId();
    }

    return $this->isOnepagerByTemplate($pageId) || $this->isOnepagerByMeta();
  }

  public function getCurrentPageId() {
    global $post;

    return $post && $post->ID ? $post->ID : null;
  }
}
