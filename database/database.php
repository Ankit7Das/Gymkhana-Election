<?php 
  include '../config.php';

  class Database {
    // DB Params
    private $host = 'localhost';
    private $db_name = 'gymkhana_database';
    private $username = 'root';
    private $password = DBPASSWORD;
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "db connected";
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }