<?php 
  class Database {
    // DB Params
    private $host = 'localhost';
    private $db_name = 'quotes';
    private $username = 'root';
    private $password = '';
    private $conn = 'Internal Database URL';

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password); //Look at mysql vs postgress
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }
