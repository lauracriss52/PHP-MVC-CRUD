<?php

class HomeController {
  public function index() {
    $title = 'Gestión de estudiantes';
    $content = 'views/home/index.php';
    require_once 'views/layout.php';
  }
}
