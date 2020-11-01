<?php
$name = htmlspecialchars($_POST["firstname"]);
$phone = htmlspecialchars($_POST["Phone"]);
$gender = htmlspecialchars($_POST["Gender"]);
$year = htmlspecialchars($_POST["year"]);
$hostel = htmlspecialchars($_POST["hostel"]);

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
    echo "<html>
    <head>
    <style>
        p {text-align: center;}
        div {text-align: center;}
    </style>
    </head>
    <body>
        <div>
        <form action='../public/election_home.html'>
            <h4>You have already registered!</h4>
            <h3>Click the button to continue voting</h3>
            <div class='button-container'>
				<button type='submit' class='button'><span>Continue</span></button>
			</div>
        </form>
        </div>
    </body>
</html>";
    
}else{
    if($user->registerUser()){
        echo "succes!!";
        echo "<script> location.href='../public/election_home.html'; </script>";
    }else{
        echo "something went wrong";
    }
}
?>


