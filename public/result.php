<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8" />
        <title>Election Home Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" >
        <link rel="icon" href="skins/logo.png" type="image/ico">
        <link rel="StyleSheet" href="../public/css/election_home.css" /> 
        
        
        
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <!-- Add your custom HEAD content here -->
 
    </head>
<style>
* {
  box-sizing: border-box;
}
.scrollbar-auto { 
      scrollbar-color: auto; 
  
      height: 150px; 
      width: 200px; 
      overflow-x: scroll; 
      background-color: lightgreen; 
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
.topnav a:hover {
    border-bottom: 3px solid red;
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

<title>GYMKHANA RESULT</title>
<body>
<?php session_start(); ?>
    <div class="navbar">
        <img src="skins/logo.png" id="logo" />
        <h1>Gymkhana Election 2020 Result</h1>  
     </div>


     
	
	
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="#vp">VP <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        GIRLS CATEGORIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#hoscag">HOSCA</a>
                        <a class="dropdown-item" href="#techg">TECHNICAL</a>
                        
                        <a class="dropdown-item" href="#welg">WELFARE</a>
                        <a class="dropdown-item" href="#maintg">MAINTENANCE </a>
                        <a class="dropdown-item" href="#messg">MESS</a>
                        
                        <a class="dropdown-item" href="#sportsg">SPORTS</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SOPHOMORE YEAR POSITIONS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#hoscas">HOSCA</a>
                        <a class="dropdown-item" href="#techss">TECHNICAL</a>
                        
                        <a class="dropdown-item" href="#welfs">WELFARE</a>
                        <a class="dropdown-item" href="#maints">MAINTENANCE </a>
                        <a class="dropdown-item" href="#messs">MESS</a>
                        
                        <a class="dropdown-item" href="#sportss">SPORTS</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        JUNIOR YEAR POSITIONS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#hoscaj">HOSCA</a>
                        <a class="dropdown-item" href="#techj">TECHNICAL</a>
                        
                        <a class="dropdown-item" href="#welfj">WELFARE</a>
                        <a class="dropdown-item" href="#maintj">MAINTENANCE </a>
                        <a class="dropdown-item" href="#messj">MESS</a>
                        
                        <a class="dropdown-item" href="#sportsj">SPORTS</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        SENIOR YEAR POSITIONS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#hoscaf">HOSCA</a>
                        <a class="dropdown-item" href="#techf">TECHNICAL</a>
                        
                        <a class="dropdown-item" href="#welff">WELFARE</a>
                        <a class="dropdown-item" href="#maintf">MAINTENANCE </a>
                        <a class="dropdown-item" href="#messf">MESS</a>
                        
                        <a class="dropdown-item" href="#sportsf">SPORTS</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PG CATEGORIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   
                        <a class="dropdown-item" href="#pgg">PG GIRLS</a>
                        
                        <a class="dropdown-item" href="#pgb">PG BOYS</a>
                        
                    </div>
                </li>
                
                
            </ul>
        </div>
</nav>

<div class="container"  style="background-color: lightblue" >
    <diV style="text-align: center;color: black; ">
        <h1>CONGRATULATIONS TO WINNERS!!!</h1>
        
    </diV>

    
  </div>


<?php
include('../database/database.php');

$database = new Database();
$db = $database->connect();


 //girls

$techg_sql='SELECT id, candidate_name, roll_no, SUM(votes) as count,max(votes) as votes ,image_url,votes FROM candidates WHERE gender=2 AND position="technical" AND degree =0 GROUP BY votes  DESC  ';
$techg_g = $db->query($techg_sql);







$welg_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) as votes FROM candidates WHERE gender=2 AND position="welfare" AND degree =0 GROUP BY votes  DESC ';
$welg_g = $db->query($welg_sql);
$hoscag_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=2 AND position="hosca" AND degree =0 GROUP BY votes  DESC     ';
$hoscag_g = $db->query($hoscag_sql);
$messg_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=2 AND position="mess" AND degree =0 GROUP BY votes  DESC     ';
$messg_g = $db->query($messg_sql);
$maintg_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=2 AND position="maintenance" AND degree =0 GROUP BY votes  DESC     ';
$maintg_g = $db->query($maintg_sql);
$sportsg_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=2 AND position="sports" AND degree =0 GROUP BY votes  DESC     ';
$sportsg_g = $db->query($sportsg_sql);
//pgg girls
$pgg_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=2  AND degree <> 0 GROUP BY votes  DESC     ';
$pgg_g = $db->query($pgg_sql);

        




//sophomore 
$techss_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="technical" AND degree =0 AND year=1 GROUP BY votes  DESC     ';
$techss_b = $db->query($techss_sql);
$welfs_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="welfare" AND degree =0 AND year=1 GROUP BY votes  DESC     ';
$welfs_b = $db->query($welfs_sql);
$sportss_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="sports" AND degree =0 AND year=1 GROUP BY votes  DESC     ';
$sportss_b = $db->query($sportss_sql);
$hoscas_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="hosca" AND degree =0 AND year=1 GROUP BY votes  DESC     ';
$hoscas_b = $db->query($hoscas_sql);
$maints_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="maintenance" AND degree =0 AND year=1 GROUP BY votes  DESC     ';
$maints_b = $db->query($maints_sql);
$messs_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="mess" AND degree =0 AND year=1 GROUP BY votes  DESC     ';
$messs_b = $db->query($messs_sql);
//junior year
$techj_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="technical" AND degree =0 AND year=2 GROUP BY votes  DESC     ';
$techj_b = $db->query($techj_sql);
$welfj_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="welfare" AND degree =0 AND year=2 GROUP BY votes  DESC     ';
$welfj_b = $db->query($welfj_sql);
$sportsj_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="sports" AND degree =0 AND year=2 GROUP BY votes  DESC     ';
$sportsj_b = $db->query($sportsj_sql);
$hoscaj_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="hosca" AND degree =0 AND year=2 GROUP BY votes  DESC     ';
$hoscaj_b = $db->query($hoscaj_sql);
$maintj_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="maintenance" AND degree =0 AND year=2 GROUP BY votes  DESC     ';
$maintj_b = $db->query($maintj_sql);
$messj_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="mess" AND degree =0 AND year=2 GROUP BY votes  DESC     ';
$messj_b = $db->query($messj_sql);
//senior year
$techf_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="technical" AND degree =0 AND year=3 GROUP BY votes  DESC     ';
$techf_b = $db->query($techf_sql);
$welff_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="welfare" AND degree =0 AND year=3 GROUP BY votes  DESC     ';
$welff_b = $db->query($welff_sql);
$sportsf_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="sports" AND degree =0 AND year=3 GROUP BY votes  DESC     ';
$sportsf_b = $db->query($sportsf_sql);
$hoscaf_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="hosca" AND degree =0 AND year=3 GROUP BY votes  DESC     ';
$hoscaf_b = $db->query($hoscaf_sql);
$maintf_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="maintenance" AND degree =0 AND year=3 GROUP BY votes  DESC';
$maintf_b = $db->query($maintf_sql);
$messf_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="mess" AND degree =0 AND year=3 GROUP BY votes  DESC  ';
$messf_b = $db->query($messf_sql);







//vp
$vp_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) as votes FROM candidates WHERE  position="vp" GROUP BY votes  DESC    ';

$vp_b =$db->query($vp_sql);    
//pg boys
$pgb_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) as votes FROM candidates WHERE gender=1  AND degree <> 0 GROUP BY votes  DESC    ';
$pgb_b = $db->query($pgb_sql);   

?>

  <div>


<div id="hosca_secretary" >
                            <h2>VICE PRESIDENT</h2>
                        </div>
  <div id="vp" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
    <div id="grid_1_ek1"    style="display:inline-block;">
                        

  <?php
  $c=0;
foreach($vp_b->fetchall(PDO::FETCH_ASSOC) as $vp){
?>

                 
                 
                    
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($vp['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($vp['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($vp['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$vp['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                        
                 <?php
}
                    ?>
                    </div>
                   
                  </div>
                   <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?> </h2>   </div>
                


                 <!-- GIRLS CATEGORIES-->       
                
                 <div class="sophomore"> 
                    <h1 >GIRLS CATEGORIES</h1>
                 </div>

<div id="hosca_secretary" >
                            <h2>HoSCA Secretary</h2>
                        </div>
                <div id="hoscag" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;"> 
                    <div id="grid_1_ek1" style="display:inline-block;">
                        
                        <?php

$c=0;

foreach($hoscag_g->fetchall(PDO::FETCH_ASSOC) as $hoscag){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($hoscag['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($hoscag['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($hoscag['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$hoscag['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      
                      <?php
}
                    ?>
                    </div>
                          
</div>
<div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2>    </div> 
                          <div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                          </div>
                     <div id="techg" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">


                    <div id="grid_1_ek1"  style="display:inline-block;" >
                    
                        
                        
<?php


$c=0;
foreach($techg_g->fetchall(PDO::FETCH_ASSOC) as $techg){
?>

                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($techg['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($techg['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($techg['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$techg['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      
                      
                    
                      <?php
} 

                    ?>
                    
                    </div>

</div>
                 <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>             
                        <div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
<div id="welg" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                    <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php

$c=0;

foreach($welg_g->fetchall(PDO::FETCH_ASSOC) as $welg){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($welg['image_url'])?>" style="width:300px;height:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($welg['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($welg['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$welg['votes']; ?>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>


</div>
<div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    

<div id="hosca_secretary" >
                            <h2>Maintenance Secretary</h2>
                        </div>
                        <div id="maintg" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                    <div id="grid_1_ek1"  style="display:inline-block;" >
                        
                        <?php

$c=0;

foreach($maintg_g->fetchall(PDO::FETCH_ASSOC) as $maintg){
?>

                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($maintg['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($maintg['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($maintg['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$maintg['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      
                      <?php
}
                    ?>

                    </div>
                   
</div>
<div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    

<div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
<div id="messg" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                    <div id="grid_1_ek1"  style="display:inline-block;" >
                        
                        <?php


$c=0;
foreach($messg_g->fetchall(PDO::FETCH_ASSOC) as $messg){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($messg['image_url'])?>" style="width:300px;height:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($messg['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($messg['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$messg['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      
                      <?php
}
                    ?>
                    </div>
                    

</div>
<div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    

<div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
<div id="sportsg" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">

                    <div id="grid_1_ek1" style="display:inline-block;"   >
                        
                        <?php


$c=0;
foreach($sportsg_g->fetchall(PDO::FETCH_ASSOC) as $sportsg){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($sportsg['image_url'])?>" style="width:300px;height:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($sportsg['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($sportsg['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$sportsg['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      
                      <?php
}
                    ?>
                    </div>
                    </div>
                    <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    

                   
<!--END-->
 <div class="sophomore"> 
                    <h1 >SOPHOMORE YEAR POSITION WINNERS</h1>
                 </div>
                 <div id="hosca_secretary" >
                            <h2>HoSCA Secretary</h2>
                        </div>
                 <div id="hoscas" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                    <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php


$c=0;
foreach($hoscas_b->fetchall(PDO::FETCH_ASSOC) as $hoscas){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($hoscas['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($hoscas['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($hoscas['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$hoscas['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                   </div>
                   <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                        </div>
                   <div id="techss" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                   
                    <div id="grid_1_ek1"  style="display:inline-block;" >
                        
                        <?php


$c=0;
foreach($techss_b->fetchall(PDO::FETCH_ASSOC) as $techss){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($techss['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($techss['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($techss['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$techss['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    

</div>
<div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
<div id="welfs" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                    <div id="grid_1_ek1"  style="display:inline-block;" >
                        
                        <?php


$c=0;
foreach($welfs_b->fetchall(PDO::FETCH_ASSOC) as $welfs){
?>
                       <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($welfs['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($welfs['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($welfs['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$welfs['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>

                    </div>
                    </div>
                    <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Maintenance Secretary</h2>
                        </div>
                    <div id="maints" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">


                    <div id="grid_1_ek1"  style="display:inline-block;" >
                        
                        <?php


$c=0;
foreach($maints_b->fetchall(PDO::FETCH_ASSOC) as $maints){
?>
                       <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($maints['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($maints['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($maints['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$maints['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    

</div>
<div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
<div id="messs" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">

                    <div id="grid_1_ek1"  style="display:inline-block;" >
                        
                        <?php


$c=0;
foreach($messs_b->fetchall(PDO::FETCH_ASSOC) as $messs){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($messs['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($messs['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($messs['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$messs['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>

                    </div>
                    </div>
                    <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
                    <div id="sportss" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">

                    <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php


$c=0;
foreach($sportss_b->fetchall(PDO::FETCH_ASSOC) as $sportss){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($sportss['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($sportss['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($sportss['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$sportss['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    </div>
         <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
          
<!--END-->
 <div class="sophomore"> 
                    <h1 >JUNIOR YEAR POSITION WINNERS</h1>
                 </div>
                 <div id="hosca_secretary" >
                            <h2>HoSCA Secretary</h2>
                        </div>
                 <div id="hoscaj" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                
                    <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php


$c=0;
foreach($hoscaj_b->fetchall(PDO::FETCH_ASSOC) as $hoscaj){
?>
                       <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($hoscaj['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($hoscaj['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($hoscaj['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$hoscaj['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    </div>
                    <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                        </div>
                    <div id="techj" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                    
                    
                    <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php


$c=0;
foreach($techj_b->fetchall(PDO::FETCH_ASSOC) as $techj){
?>
                      <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($techj['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($techj['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($techj['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$techj['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    </div>
                    <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
                    <div id="welfj" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">


                    <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php


$c=0;
foreach($welfj_b->fetchall(PDO::FETCH_ASSOC) as $welfj){
?>
                       <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($welfj['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($welfj['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($welfj['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$welfj['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    </div>


<div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Maintenance Secretary</h2>
                        </div>
<div id="maintj" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                    <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php

$c=0;

foreach($maintj_b->fetchall(PDO::FETCH_ASSOC) as $maintj){
?>
                       <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($maintj['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($maintj['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($maintj['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$maintj['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                   
</div>
<div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
<div id="messj" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">

                    <div id="grid_1_ek1" style="display:inline-block;"   >
                        
                        <?php


$c=0;
foreach($messj_b->fetchall(PDO::FETCH_ASSOC) as $messj){
?>
                       <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($messj['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($messj['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($messj['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$messj['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                 </div>
                 <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
                 <div id="sportsj" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">  



                    <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php


$c=0;
foreach($sportsj_b->fetchall(PDO::FETCH_ASSOC) as $sportsj){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($sportsj['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($sportsj['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($sportsj['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$sportsj['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                </div> 
                <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
  
<!--END-->
 <div class="sophomore"> 
                    <h1 >SENIOR YEAR POSITION WINNERS</h1>
                 </div>
                 <div id="hosca_secretary" >
                            <h2>HoSCA Secretary</h2>
                        </div>
                 <div id="hoscaf" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                 
                    <div id="grid_1_ek1" style="display:inline-block;"   >
                        
                        <?php


$c=0;
foreach($hoscaf_b->fetchall(PDO::FETCH_ASSOC) as $hoscaf){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($hoscaf['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($hoscaf['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($hoscaf['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$hoscaf['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    </div>
                    <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                        </div>
                    <div id="techf" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                    
                    <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php


$c=0;
foreach($techf_b->fetchall(PDO::FETCH_ASSOC) as $techf){
?>
                       <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($techf['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($techf['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($techf['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$techf['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                    <?php
}
                    ?>
                    </div>
                    </div>
                    <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div> 
                    <div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
                    <div id="welff" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">


                    <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php


$c=0;
foreach($welff_b->fetchall(PDO::FETCH_ASSOC) as $welff){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($welff['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($welff['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($welff['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$welff['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                       <?php
}
                    ?>
                    </div>

</div>
<div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Maintenance Secretary</h2>
                        </div>
<div id="maintf" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">


                    <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php


$c=0;
foreach($maintf_b->fetchall(PDO::FETCH_ASSOC) as $maintf){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($maintf['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($maintf['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white"  style="text-transform:uppercase;"><?php echo htmlspecialchars($maintf['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$maintf['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                   </div>
                   <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
                   <div id="messf" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">


             <div id="grid_1_ek1"  style="display:inline-block;" >
                        
                        <?php


$c=0;
foreach($messf_b->fetchall(PDO::FETCH_ASSOC) as $messf){
?>
                       <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($messf['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($messf['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($messf['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$messf['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    
</div>
<div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
<div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
<div id="sportsf" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">

                    <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php


$c=0;
foreach($sportsf_b->fetchall(PDO::FETCH_ASSOC) as $sportsf){
?>
                       <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($sportsf['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($sportsf['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($sportsf['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$sportsf['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                   </div>
                   <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    

<!--END-->
 <div class="sophomore"> 
                    <h1 >PG CATEGORIES</h1>
                 </div>
                  <div id="hosca_secretary" >
                            <h2> PG GIRLS Secretary</h2>
                        </div>
                 <div id="pgg" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                    <div id="grid_1_ek1" style="display:inline-block;"  >
                       
                        <?php


$c=0;
foreach($pgg_g->fetchall(PDO::FETCH_ASSOC) as $pgg){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($pgg['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($pgg['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($pgg['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$pgg['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    </div>
                    <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    


<div id="hosca_secretary" >
                            <h2>PG BOYS Secretary</h2>
                        </div>
                    <div id="pgb" style="overflow-x: scroll;
         overflow-y: hidden;
          white-space: nowrap;">
                    
             <div id="grid_1_ek1" style="display:inline-block;"  >
                        
                        <?php


$c=0;
foreach($pgb_b->fetchall(PDO::FETCH_ASSOC) as $pgb){
?>
                        <div style="display:inline-block; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($pgb['image_url'])?>" style="width:300px;height:300px;" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($pgb['candidate_name']);  ?></h2>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 class="text-white" style="text-transform:uppercase;"><?php echo htmlspecialchars($pgb['votes']);  ?>&nbspVotes</h2>
                                    </div>
                                    
                                    <?php $c +=$pgb['votes']; ?>
                                    
                                    
                                    
                                    
                                    
                                   
                                </div>
                                
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    </div>
                  <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color:#e8f5e994;margin: 10px;">  <h2>TOTAL VOTES: &nbsp &nbsp <?php echo  $c; ?></h2></div>    
  
<!--END-->








                  </div>


                 

</body>
</html>
