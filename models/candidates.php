<?php
   class Candidate{

    private $conn;
    private $table='candidates';

    public $id;
    public $roll_no;
    public $candidate_name;
    public $image;
    public $year;
    public $email;
    public $position;
    public $gender;
    public $btech19_girls;
    public $btech19_boys;
    public $btech18_boys;
    public $btech18_girls;
    public $btech17_boys;
    public $btech17_girls;
    public $pg_boys;
    public $pg_girls;
    public $votes;

    public function __construct($db)
    {
        $this->conn=$db;
    }
   }