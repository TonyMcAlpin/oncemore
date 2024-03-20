<?php 
  class Database {
    // DB Params
    //private $host = 'localhost';
    //private $port ='5432';            
    //private $db_name = 'quotes_u9ab';
    //private $username = 'postgres';          // changed from root to postgres
    //private $password = 'postgres';          // changed from '' to postgres
    //private $conn; 
    private $conn;
    private $host;
    private $port;
    private $dbname;
    private $username;
    private $password;

    public function __construct(){
      $this->username =getenv('USERNAME');
      $this->password =getenv('PASSWORD');
      $this->dbname =getenv('DBNAME');
      $this->host=getenv('HOST');
      $this->port=getenv('PORT');
      

    }

    // DB Connect
    public function connect() {
      if($this->conn){
        return $this->conn;
      }else{
        $dsn= "pgsql:host={$this->host};port={$this->port};dbname={$this->dbname}";
      

        try { 
          $this->conn = new PDO($dsn, $this->username, $this->password); //$this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password); //      
          $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
          echo 'Connection Error: ' . $e->getMessage();
        }
    }
  }
}
