<?php 
  class Database {
    // DB Params
    private $host = 'localhost';
    //private $port ='5432';            
    private $db_name = 'quotes';
    private $username = 'root';          // changed from root to postgres
    private $password = '';          // changed from '' to postgres
    private $conn; 

    // DB Connect
    public function connect() {
      $this->conn = null;
      //$dsn= "pgsql:host={$this->host};port={$this->port};dbname={$this->db_name}";

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password); //$this->conn = new PDO($dsn, $this->username, $this->password);      
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }
