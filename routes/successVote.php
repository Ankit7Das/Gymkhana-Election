<?php

include('../database/database.php');


$database = new Database();
$db = $database->connect();

session_start();

if(isset($_POST['submit'])){

    $vote = $_POST['votecheck'];

    $i=1;

    while($i <= count($_POST['votecheck'])){
        if(isset($vote[$i])){
            $q = 'UPDATE candidates SET votes=votes+1 WHERE id=:id';
            $stmt = $db->prepare($q);
            $stmt->execute(array(':id' => $vote[$i]));
            $cnt++;
        }
        $i++;
    }
    echo $_SESSION['rollno'];
    $roll = $_SESSION['rollno'];
    $q2 = 'UPDATE user SET is_voted = 1 WHERE roll_no=:roll_no';
    $stmt1 = $db->prepare($q2);
    $stmt1->bindParam(':roll_no',$roll);


if($stmt1->execute()){
    echo "<script> location.href='../public/votingSuccess.html'; </script>";

}
session_destroy();
}


?>