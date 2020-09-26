<?php
  class User{
      private $conn;
      private $table='user';

      public $id;
      public $roll_no;
      public $gender;
      public $year;
      public $time_of_vote;
      

      public function __construct($db){
          $this->conn = $db;
      }

      
  }