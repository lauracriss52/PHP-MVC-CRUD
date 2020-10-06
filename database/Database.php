<?php

class Database {
  private $host;
  private $user;
  private $password;
  private $database;
  public $connection;

  public function __construct() {
    $this->host = 'localhost';
    $this->user = 'root';
    $this->password = '';
    $this->database = 'school';
    $this->connection = new mysqli(
      $this->host, 
      $this->user, 
      $this->password, 
      $this->database
    );

    if ($this->connection->connect_error) {
      die('Conexión fallida: ' . $this->connection->connect_error);
    }
  }
}
