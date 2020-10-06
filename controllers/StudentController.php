<?php

require_once 'models/Student.php';

class StudentController {
  private $model;

  public function __construct() {
    $this->model = new Student;
  }

  public function error() {
    $title = '¡Ups, algo ha salido mal!';
    require_once 'views/layout.php';
  }

  public function index() {
    $students = $this->model->all();
    
    if (!$students) {
      $this->error();
      return;
    }
    
    $title = 'Lista de estudiantes';
    $content = 'views/student/index.php';
    require_once 'views/layout.php';
  }

  public function create() {
    $title = 'Creación de estudiantes';
    $action = '/PHP-MVC-CRUD/estudiantes/guardar';
    $content = 'views/student/form.php';
    require_once 'views/layout.php';
  }
  
  public function store() {
    $student = $this->model->save(
      $_POST['identification'],
      $_POST['name'],
      $_POST['last_name'],
      $_POST['email'],
    );

    if (!$student) {
      $this->error();
      return;
    }

    header('location: /PHP-MVC-CRUD/estudiantes');
  }
  
  public function edit($id) {
    $student = $this->model->find($id);

    if (!$student) {
      $this->error();
      return;
    }
    
    $action = '/PHP-MVC-CRUD/estudiantes/actualizar';
    $title = 'Edición de estudiantes';
    $content = 'views/student/form.php';
    require_once 'views/layout.php';
  }

  public function update() {
    $student = $this->model->update(
      $_POST['id'],
      $_POST['identification'],
      $_POST['name'],
      $_POST['last_name'],
      $_POST['email'],
    );

    if (!$student) {
      $this->error();
      return;
    }

    header('location: /PHP-MVC-CRUD/estudiantes');
  }

  public function delete() {
    $student = $this->model->delete($_POST['id']);

    if (!$student) {
      $this->error();
      return;
    }

    header('location: /PHP-MVC-CRUD/estudiantes');
  }
}
