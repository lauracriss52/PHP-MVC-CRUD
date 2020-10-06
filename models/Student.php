<?php

require_once 'database/Database.php';

class Student {
  private $database;

  public function __construct() {
    $this->database = new Database;
  }
  
  public function __destruct() {
    $this->database->connection->close();
  }

  public function all() {
    $students = [];
    $query = 'SELECT * FROM students';
    $result = $this->database->connection->query($query);

    if (!$result) {
      return null;
    }
    
    while ($student = $result->fetch_object()) {
      $students[] = $student;
    }

    return $students;
  }

  public function find($id) {
    $query = "SELECT * FROM students WHERE id = $id";
    $result = $this->database->connection->query($query);

    if(!$result) {
      return null;
    }

    return $result->fetch_object();
  }
  
  public function save($identification, $name, $last_name, $email) {
    $query = "INSERT INTO students (identification, name, last_name, email)
      VALUES ('$identification', '$name', '$last_name', '$email')";

    $result = $this->database->connection->query($query);

    if(!$result) {
      return null;
    }

    return true;
  }

  public function update($id, $identification, $name, $last_name, $email) {
    $query = "UPDATE students 
      SET identification = '$identification', name = '$name', last_name = '$last_name', email = '$email'
      WHERE id = $id";

    $result = $this->database->connection->query($query);

    if(!$result) {
      return null;
    }

    return true;
  }
 
  public function delete($id) {
    $query = "DELETE FROM students WHERE id = $id";
    $result = $this->database->connection->query($query);

    if(!$result) {
      return null;
    }

    return true;
  }
}