<?php namespace App\Controllers;

class ApiController {
  function saveSections() {
    $sections = array_get($_POST, 'sections', []);

    //strip slashes
    $sections = $this->filterInput($sections);

    $updated  = $_POST['updated'];
    $pageId   = array_get($_POST, 'pageId', false);
    $response = [];

    $section = array_get($sections, $updated, false);

    //TODO: Improve this
    if ($pageId) {
      onepager()->section()->save($pageId, $sections);
    }

    if ($section) {
      $render = onepager()->render();

      $section             = $render->sectionBlockDataMerge($section);
      $response["content"] = $render->section($section);
      $response["style"]   = $render->style($section);
    }

    $response["success"] = true;

    //TODO: better response
    op_send_json($response);
  }

  function addMenu() {
    $menuId    = $_POST['menuId'];
    $itemTitle = $_POST['itemTitle'];
    $itemId    = $_POST['itemId'];

    onepager()->navigationMenu()->addItem($menuId, $itemTitle, $itemId);

    //TODO: better response
    op_send_json_success();
  }

  function saveOptions() {
    $page    = $_POST['page'];
    $options = $_POST['options'];

    $options = $this->filterInput($options);

    update_option($page, $options);

    //TODO: better response
    op_send_json_success();
  }

  function get_sections() {
    $pageId = array_get($_POST, 'pageId', false);

    //TODO: Improve this
    if (!$pageId) {
      $response["success"] = false;
      op_send_json($response);
    }


    $sections             = onepager()->section()->getAllValid($pageId);
    $response['sections'] = $sections;
    $response["success"]  = true;

    //TODO: better response
    op_send_json($response);
  }

  function selectLayout() {
    $pageId   = array_get($_POST, 'pageId',  false);
    $layoutId = array_get($_POST, 'layoutId',  false);

    $onepagerLayouts = onepager()->layoutManager()->all();
    $layout          = array_find_by($onepagerLayouts, 'id', $layoutId);

    $response = array();

    if ($layout) {
      onepager()->section()->save($pageId, $layout['sections']);

      //TODO: better response
      $response["success"] = true;
      op_send_json($response);
    } else {
      //TODO: better response
      $response["success"] = false;
      op_send_json($response);
    }

  }

  public function reloadSections() {
    $sections = array_get($_POST, 'sections', []);

    $sections = array_map(function ($section) {
      $section['content'] = onepager()->render()->section($section);
      $section['style']   = onepager()->render()->style($section);

      return $section;
    }, $sections);

    $response = array(
      'success'  => true,
      'sections' => $sections,
    );

    op_send_json($response);
  }

  public function reloadBlocks() {
    $blocks  = array_values(onepager()->blockManager()->all());
    $success = true;

    op_send_json(compact('success', 'blocks'));
  }

  /**
   * @param $input
   *
   * @return mixed
   *
   */
  public function filterInput(&$input) {
    array_walk_recursive($input, function (&$value) {
      $value = stripslashes($value);

      if ($value === "true") {
        $value = true;
      }
      if ($value === "false") {
        $value = false;
      }
    });

    return $input;
  }

}
