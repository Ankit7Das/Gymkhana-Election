<?php

include_once '../database/database.php';
include_once '../models/user.php';

if(isset($_POST['Submit'])){
$name = trim(htmlspecialchars($_POST["firstname"]));
$phone = trim(htmlspecialchars($_POST["Phone"]));
$roll = strtolower(trim(htmlspecialchars($_POST["rollno"])));
$gender = htmlspecialchars($_POST["Gender"]);
// $year = htmlspecialchars($_POST["year"]);
$hostel = htmlspecialchars($_POST["hostel"]);

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
        $_SESSION['rollno'] = $user->roll_no;
    
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
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: black;
  
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.navbar{
  display: flex;
  justify-content: center;
  align-items: center;
  /*max-width: 900px;*/
  width: 100%;
  margin: 0 auto;
  background-color: black;
  color: azure;

}
#logo {
  width: 15rem;
  height: 10rem;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
  input[type=text], select, textarea {
  width: 100%;
  
}
}
</style>
</head>
<title>User Details</title>
<body>
    <div class="navbar">
        <img src="../public/skins/logo.png" id="logo" />
        <h1>Gymkhana Election 2020</h1>  
     </div>
<div class="container">
    <diV style="text-align: center;">
        <h1>Welcome folks!</h1>
        <h4>Please enter your details carefully! Once submitted you cannot change your details.<br>Providing wrong user information would bring upon serious penalties!<br>You will only be given one chance to vote after your have registererd.</h4>
    </diV>
    
  <form action="../routes/userDetails.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" autocomplete="off" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Roll number</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" autocomplete="off" name="rollno" placeholder="Your roll no..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="Phone" autocomplete="off" placeholder="Your Phone number..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Year</label>
      </div>
      <div class="col-75">
        <select id="country" name="year">
          <option value="2nd">2nd year</option>
          <option value="3rd">3rd year</option>
          <option value="4th">4th year</option>
          <option value="5th">5th year</option>
        </select>
      </div>
    </div>
    <div class="row">
        <div class="col-25">
          <label for="gender">Gender</label>
        </div>
        <div class="col-75">
          <select id="country" name="Gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="country">Hostel</label>
        </div>
        <div class="col-75">
          <select id="country" name="hostel">
            <option value="CV Raman Hostel">C.V. Raman Hostel</option>
            <option value="A.P.J. Abdul kalam">A.P.J. Abdul Kalam Hostel</option>
            <option value="Asima Chatterjee">Asima Chatterjee</option>
          </select>
        </div>
      </div>
      
    
    <div class="row">
       <div style="display: flex; justify-content: center; margin-top: 2rem;">
        <input type="submit" onclick="return confirm('Confirm Submission:Do You want to submit?');" value="Submit" name="Submit" id= "Submit">
       </div> 
      
    </div>
  </form>
</div>

</body>
</html>
