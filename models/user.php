<?php
  class User{
      private $conn;
      private $table='user';

      public $id;
      public $roll_no;
      public $gender;
      public $year;
      public $hostel;
      public $webmail;
      public $degree;
      public $phone;
      public $time_of_vote;
      public $is_voted;
      

      public function __construct($db){
          $this->conn = $db;
      }
      
      public function registerUser(){
          $query= 'INSERT INTO ' . $this->table . ' SET roll_no = :roll_no, time_of_vote = :time_of_vote, gender = :gender, webmail = :webmail, degree = :degree, phone = :phone,hostel= :hostel, year = :year, is_voted= :is_voted';
          $stmt = $this->conn->prepare($query);

          $stmt->bindParam(':roll_no',$this->roll_no);
          $stmt->bindParam(':time_of_vote',$this->time_of_vote);
          $stmt->bindParam(':gender',$this->gender);
          $stmt->bindParam(':degree',$this->degree);
          $stmt->bindParam(':webmail',$this->webmail);
          $stmt->bindParam(':phone',$this->phone);
          $stmt->bindParam(':hostel',$this->hostel);
          $stmt->bindParam(':year',$this->year);
          $stmt->bindParam(':is_voted',$this->is_voted);

          if($stmt->execute()) {
            return true;
          }
            printf("Error: %s.\n", $stmt->error);
            return false;

      }
      
      public function isRegisteredUser(){
        $query = 'SELECT
          roll_no
        FROM
          ' . $this->table . '
      WHERE webmail = "' . $this->webmail . '"
       LIMIT 0,1';

      $stmt = $this->conn->prepare($query);

      $stmt->execute();

      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      if($row == null){
        return false;
      }
      return true;
      }

    public function hasVoted(){
      $query = 'SELECT
          is_voted
        FROM
          ' . $this->table . '
      WHERE webmail = "' . $this->webmail . '"
      LIMIT 0,1';
       
      $stmt = $this->conn->prepare($query);
      $stmt->execute();

      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      if($row['is_voted']==1)
         return true;
      return false;

    }
      
  }