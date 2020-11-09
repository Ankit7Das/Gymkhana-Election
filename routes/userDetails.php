<?php
$name = htmlspecialchars($_POST["firstname"]);
$phone = htmlspecialchars($_POST["Phone"]);
$gender = htmlspecialchars($_POST["Gender"]);
$year = htmlspecialchars($_POST["year"]);
$hostel = htmlspecialchars($_POST["hostel"]);

include_once '../database/database.php';
include_once '../models/user.php';

session_start();

$webmail = $_SESSION['webmail'];

//session_destroy();
preg_match('~_(.*?)@~',$webmail,$output);
$roll_no = $output[1];
// $roll_no=$webmail;

if($roll_no[2]==='0' && $roll_no[3]==='1'){
    $_SESSION['degree']=0;
}else{
    $_SESSION['degree']=1;
}

$database = new Database();
$db = $database->connect();

$user = new User($db);

$user->roll_no = $roll_no;
$user->gender = $gender;
$user->phone =$phone;
$user->time_of_vote = date("Y-m-d") . ' ' . date("G:i", strtotime(date("h:i:sa")));
$user->hostel =$hostel;
$user->year =$year;

$_SESSION['gender']=$user->gender;
$_SESSION['year']=$user->year;

// echo $user->isRegisteredUser();

if($user->isRegisteredUser()){
    echo "<script> location.href='../public/error.html'; </script>";
    
}else{
    if($user->registerUser()){
        echo "succes!!";
        echo "<script> location.href='./electionPage.php'; </script>";
    }else{
        echo "something went wrong";
    }
}
?>


