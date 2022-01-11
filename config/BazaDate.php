<?php

class BazaDate {
  //params

  private $host = 'localhost';
  private $db_name = 'restapipoostman';
  private $username = 'root';
  public $password = '';
  public $conn;


  //method to connect

  public function connect()
  {
    $this->$conn = null;

    try {
      $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username,
      $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo 'Connection error' . $e->getMessage();
    }
    return $this->conn;
  }
}