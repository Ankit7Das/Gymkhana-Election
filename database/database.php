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
        // echo "db connected";
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
    //mysqli connect
    public function mysqliconnect() {
      $this->conn = null;

      $this->conn=mysqli_connect($this->host,$this->username,$this->password,$this->db_name);
      if (!$this->conn) {
        die('Connect Error: ' . mysqli_connect_errno());
      }
      return $this->conn;
    }
  }