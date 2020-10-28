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
echo $webmail. " from login.php";

session_destroy();
$roll_no = substr($webmail,strpos($webmail,"_")+1);


$database = new Database();
$db = $database->connect();

$user = new User($db);

$user->roll_no = $roll_no;
$user->gender = $gender;
$user->phone =$phone;
$user->time_of_vote = date("Y-m-d") . ' ' . date("G:i", strtotime(date("h:i:sa")));
$user->hostel =$hostel;
$user->year =$year;

if($user->registerUser()){
    echo "succes!!";
    echo "<script> location.href='../public/election_page_ui_display.html'; </script>";
}else{
    echo "something went wrong";
}
