<?php

/**
 * @file
 * Contains \Drupal\menu\Controller\MenuController.
 */
namespace Drupal\menu\Controller;

use Drupal\Core\Controller\ControllerBase;

class MenuController extends ControllerBase {
  public function content($name) {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello @name', array('@name' => $name)),
    );
  }
}