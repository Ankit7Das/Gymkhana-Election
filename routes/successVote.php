<?php

include('../database/database.php');


$database = new Database();
$db = $database->connect();


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

    echo "<script> location.href='../public/votingSuccess.html'; </script>";

    

}


?>