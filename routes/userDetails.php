<?php
$name = trim(htmlspecialchars($_POST["firstname"]));
$phone = trim(htmlspecialchars($_POST["Phone"]));
$roll = strtolower(trim(htmlspecialchars($_POST["rollno"])));
$gender = htmlspecialchars($_POST["Gender"]);
// $year = htmlspecialchars($_POST["year"]);
$hostel = htmlspecialchars($_POST["hostel"]);

include_once '../database/database.php';
include_once '../models/user.php';

if (empty($name) || empty($roll) || strlen($phone)!=10 || strlen($roll)!=8) {
    echo "Please enter the correct details! ";
    echo "<script> location.href='../public/error_signup.php'; </script>";
} else {

    session_start();

    $webmail = $_SESSION['webmail'];

    //session_destroy();
    // preg_match('~_(.*?)@~', $webmail, $output);
    // $roll_no = $output[1];
    // $roll_no=$webmail;
    $roll_no = $roll;

        if ($roll_no[2] === '0' && $roll_no[3] === '1') {
            $_SESSION['degree'] = 0;
        } else {
            $_SESSION['degree'] = 1;
        }
    
        $database = new Database();
        $db = $database->connect();

        if(substr($roll_no,0,4)=="1901")
        $year = "2nd";
        else if(substr($roll_no,0,4)=="1801")
        $year = "3rd";
        else if(substr($roll_no,0,4)=="1701")
        $year = "4th";
        else
        $year = "5th";
    
        $user = new User($db);
    
        $user->roll_no = $roll_no;
        $user->gender = $gender;
        $user->phone = $phone;
        $user->time_of_vote = date("Y-m-d") . ' ' . date("G:i", strtotime(date("h:i:sa")));
        $user->hostel = $hostel;
        $user->year = $year;
        $user->is_voted = 0;
    
        $_SESSION['gender'] = $user->gender;
        $_SESSION['year'] = $user->year;
    
        // echo $user->isRegisteredUser();
    
        if ($user->isRegisteredUser()) {
            if($user->hasVoted()){
                echo "<script> location.href='../public/error.html'; </script>";
            }
            echo "<script> location.href='../public/continue_voting.php'; </script>";
        } else {
            if ($user->registerUser()) {
                echo "succes!!";
                echo "<script> location.href='./electionPage.php'; </script>";
            } else {
                echo "something went wrong";
            }
        }
    
}
