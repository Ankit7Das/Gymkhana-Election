<?php
  class User{
      private $conn;
      private $table='user';

      public $id;
      public $roll_no;
      public $gender;
      public $year;
      public $hostel;
      public $phone;
      public $time_of_vote;
      

      public function __construct($db){
          $this->conn = $db;
      }
      
      public function registerUser(){
          $query= 'INSERT INTO ' . $this->table . ' SET roll_no = :roll_no, time_of_vote = :time_of_vote, gender = :gender, phone = :phone,hostel= :hostel, year = :year';
          $stmt = $this->conn->prepare($query);

          $stmt->bindParam(':roll_no',$this->roll_no);
          $stmt->bindParam(':time_of_vote',$this->time_of_vote);
          $stmt->bindParam(':gender',$this->gender);
          $stmt->bindParam(':phone',$this->phone);
          $stmt->bindParam(':hostel',$this->hostel);
          $stmt->bindParam(':year',$this->year);

          if($stmt->execute()) {
            return true;
          }
            printf("Error: %s.\n", $stmt->error);
            return false;

      }
      
  }