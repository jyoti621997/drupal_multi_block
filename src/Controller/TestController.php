<?php
namespace Drupal\custom\Controller;

use Drupal\Core\Controller\ControllerBase;

class TestController extends ControllerBase
{

    public function list() {
        return array(
            '#theme' => 'list',
            '#bar'   => 'Variable transmission test'
        );
    }

}