<?php
$name = "hello test";
$phone = "989239422";
$gender = "f";
$year = "3";
$hostel = "C.V.Raman";

include_once '../database/Database.php';
include_once '../models/user.php';

session_start();

$webmail = $_SESSION['webmail'];

session_destroy();
preg_match('~_(.*?)@~',$webmail,$output);
$roll_no = $output[1];
// $roll_no=$webmail;


$database = new Database();
$db = $database->connect();

$user = new User($db);

$user->roll_no = $roll_no;
$user->gender = $gender;
$user->phone =$phone;
$user->time_of_vote = date("Y-m-d") . ' ' . date("G:i", strtotime(date("h:i:sa")));
$user->hostel =$hostel;
$user->year =$year;

// echo $user->isRegisteredUser();

if($user->isRegisteredUser()){
    echo "You have already registered!<br>Cannot change info once registered";
}else{
    if($user->registerUser()){
        echo "succes!!";
        echo "<script> location.href='../public/election_page_ui_display.html'; </script>";
    }else{
        echo "something went wrong";
    }
}

