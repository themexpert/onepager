<?php
/**
 * Created by PhpStorm.
 * User: na
 * Date: 6/10/15
 * Time: 8:53 AM
 */
namespace ThemeXpert\Onepager;

interface OnepagerInterface {
  public function navigationMenu();

  public function toolbar();

  public function content();

  public function asset();

  public function api();

  public function security();

  public function view();

  public function section();
}
