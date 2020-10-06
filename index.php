<?php

$baseRoute = '/PHP-MVC-CRUD';
$route = str_replace($baseRoute, '', $_SERVER['REQUEST_URI']);
$params = [];

if (strpos($route, '?')) {
  $route_components = parse_url($route);
  parse_str($route_components['query'], $params);
  $route = substr($route, 0, strpos($route, '?'));
}

switch ($route) {
  case '/':
    require_once 'controllers/HomeController.php';
    $controller = new HomeController;
    $controller->index();
    break;

  case '/estudiantes':
    require_once 'controllers/StudentController.php';
    $controller = new StudentController;
    $controller->index();
    break;

  case '/estudiantes/crear':
    require_once 'controllers/StudentController.php';
    $controller = new StudentController;
    $controller->create();
    break;

  case '/estudiantes/guardar':
    require_once 'controllers/StudentController.php';
    $controller = new StudentController;
    $controller->store();
    break;

  case '/estudiantes/editar':
    require_once 'controllers/StudentController.php';
    $controller = new StudentController;
    $controller->edit($params['id']);
    break;

  case '/estudiantes/actualizar':
    require_once 'controllers/StudentController.php';
    $controller = new StudentController;
    $controller->update();
    break;
  
  case '/estudiantes/eliminar':
    require_once 'controllers/StudentController.php';
    $controller = new StudentController;
    $controller->delete();
    break;
  
    default:
      header('location: /PHP-MVC-CRUD/');
      break;
}
