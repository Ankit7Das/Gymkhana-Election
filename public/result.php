<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8" />
        <title>Election Home Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" >
        <link rel="StyleSheet" href="../public/css/election_home.css" /> 
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>
        <!-- Add your custom HEAD content here -->
 
    </head>
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
<title>GYMKHANA RESULT</title>
<body>
    <div class="navbar">
        <img src="skins/logo.png" id="logo" />
        <h1>Gymkhana Election 2020 Result</h1>  
     </div>
<div class="container" style="background-color: lightblue" >
    <diV style="text-align: center;color: black; ">
        <h1>WINNERS!</h1>
        
    </diV>

    
  </div>

<?php
include('../database/database.php');
 session_start();
 $database = new Database();

 $db =  $database->mysqliconnect();


 //girls

$techg_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=2 AND position="technical" AND degree =0 GROUP BY votes  DESC LIMIT 1 ';
$techg_g = mysqli_query($db,$techg_sql);
$welg_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) as votes FROM candidates WHERE gender=2 AND position="welfare" AND degree =0 GROUP BY votes  DESC LIMIT 1';
$welg_g = mysqli_query($db,$welg_sql);
$hoscag_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=2 AND position="hosca" AND degree =0 GROUP BY votes  DESC LIMIT 1 ';
$hoscag_g = mysqli_query($db,$hoscag_sql);
$messg_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=2 AND position="mess" AND degree =0 GROUP BY votes  DESC LIMIT 1 ';
$messg_g = mysqli_query($db,$messg_sql);
$maintg_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=2 AND position="maintenance" AND degree =0 GROUP BY votes  DESC LIMIT 1 ';
$maintg_g = mysqli_query($db,$maintg_sql);
$sportsg_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=2 AND position="sports" AND degree =0 GROUP BY votes  DESC LIMIT 1 ';
$sportsg_g = mysqli_query($db,$sportsg_sql);
//pgg girls
$pgg_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=2  AND degree <> 0 GROUP BY votes  DESC LIMIT 1 ';
$pgg_g = mysqli_query($db,$pgg_sql);

        




//sophomore 
$techss_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="technical" AND degree =0 AND year=1 GROUP BY votes  DESC LIMIT 1 ';
$techss_b = mysqli_query($db,$techss_sql);
$welfs_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="welfare" AND degree =0 AND year=1 GROUP BY votes  DESC LIMIT 1 ';
$welfs_b = mysqli_query($db,$welfs_sql);
$sportss_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="sports" AND degree =0 AND year=1 GROUP BY votes  DESC LIMIT 1 ';
$sportss_b = mysqli_query($db,$sportss_sql);
$hoscas_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="hosca" AND degree =0 AND year=1 GROUP BY votes  DESC LIMIT 1 ';
$hoscas_b = mysqli_query($db,$hoscas_sql);
$maints_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="maintenance" AND degree =0 AND year=1 GROUP BY votes  DESC LIMIT 1 ';
$maints_b = mysqli_query($db,$maints_sql);
$messs_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="mess" AND degree =0 AND year=1 GROUP BY votes  DESC LIMIT 1 ';
$messs_b = mysqli_query($db,$messs_sql);
//junior year
$techj_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="technical" AND degree =0 AND year=2 GROUP BY votes  DESC LIMIT 1 ';
$techj_b = mysqli_query($db,$techj_sql);
$welfj_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="welfare" AND degree =0 AND year=2 GROUP BY votes  DESC LIMIT 1 ';
$welfj_b = mysqli_query($db,$welfj_sql);
$sportsj_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="sports" AND degree =0 AND year=2 GROUP BY votes  DESC LIMIT 1 ';
$sportsj_b = mysqli_query($db,$sportsj_sql);
$hoscaj_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="hosca" AND degree =0 AND year=2 GROUP BY votes  DESC LIMIT 1 ';
$hoscaj_b = mysqli_query($db,$hoscaj_sql);
$maintj_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="maintenance" AND degree =0 AND year=2 GROUP BY votes  DESC LIMIT 1 ';
$maintj_b = mysqli_query($db,$maintj_sql);
$messj_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="mess" AND degree =0 AND year=2 GROUP BY votes  DESC LIMIT 1 ';
$messj_b = mysqli_query($db,$messj_sql);
//senior year
$techf_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="technical" AND degree =0 AND year=3 GROUP BY votes  DESC LIMIT 1 ';
$techf_b = mysqli_query($db,$techf_sql);
$welff_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="welfare" AND degree =0 AND year=3 GROUP BY votes  DESC LIMIT 1 ';
$welff_b = mysqli_query($db,$welff_sql);
$sportsf_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="sports" AND degree =0 AND year=3 GROUP BY votes  DESC LIMIT 1 ';
$sportsf_b = mysqli_query($db,$sportsf_sql);
$hoscaf_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="hosca" AND degree =0 AND year=3 GROUP BY votes  DESC LIMIT 1 ';
$hoscaf_b = mysqli_query($db,$hoscaf_sql);
$maintf_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="maintenance" AND degree =0 AND year=3 GROUP BY votes  DESC LIMIT 1 ';
$maintf_b = mysqli_query($db,$maintf_sql);
$messf_sql='SELECT id, candidate_name, roll_no, max(votes) as votes ,image_url,votes FROM candidates WHERE gender=1 AND position="mess" AND degree =0 AND year=3 GROUP BY votes  DESC LIMIT 1 ';
$messf_b = mysqli_query($db,$messf_sql);







//vp
$vp_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) as votes FROM candidates WHERE  position="vp" GROUP BY votes  DESC LIMIT 1';

$vp_b = mysqli_query($db,$vp_sql);    
//pg boys
$pgb_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) as votes FROM candidates WHERE gender=1  AND degree <> 0 GROUP BY votes  DESC LIMIT 1';
$pgb_b = mysqli_query($db,$pgb_sql);   

?>

  <div>
    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>VICE PRESIDENT</h2>
                        </div>
  <?php



while($vp = mysqli_fetch_array($vp_b)){
?>

                 
                 
                    
                        <div style="display: flex;width: 97%; justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">

                            <div id="person1"  >
                                <div id="group_1">

                                    <img src="<?php echo htmlspecialchars($vp['image_url'])?>"/>
                                    <div style="display: flex; justify-content: space-between;align-items: center">

                                    <h2><?php echo $vp['candidate_name']  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                            
                          
                          </div>

                        </div>
                 <?php
}
                    ?>
                 <!-- GIRLS CATEGORIES-->       
                
                 <div class="sophomore"> 
                    <h1 >GIRLS CATEGORIES</h1>
                 </div>
                 
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>HoSCA Secretary</h2>
                        </div>
                        <?php



while($hoscag = mysqli_fetch_array($hoscag_g)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($hoscag['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($hoscag['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    


                    
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                        </div>
                        <?php



while($techg = mysqli_fetch_array($techg_g)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($techg['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($techg['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
} 
                    ?>
                    </div>
                    

                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
                        <?php



while($welg = mysqli_fetch_array($welg_g)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($welg['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($welg['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>



                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Maintenance Secretary</h2>
                        </div>
                        <?php



while($maintg = mysqli_fetch_array($maintg_g)){
?>

                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($maintg['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($maintg['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>

                    </div>
                   

                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
                        <?php



while($messg = mysqli_fetch_array($messg_g)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($messg['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($messg['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    



                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
                        <?php



while($sportsg= mysqli_fetch_array($sportsg_g)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($sportsg['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($sportsg['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                   
<!--END-->
 <div class="sophomore"> 
                    <h1 >SOPHOMORE YEAR POSITION WINNERS</h1>
                 </div>
                 
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>HoSCA Secretary</h2>
                        </div>
                        <?php



while($hoscas = mysqli_fetch_array($hoscas_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($hoscas['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($hoscas['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                   
                   
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                        </div>
                        <?php



while($techss = mysqli_fetch_array($techss_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($techss['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($techss['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    


                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
                        <?php



while($welfs = mysqli_fetch_array($welfs_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($welfs['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($welfs['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>

                    </div>
                    


                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Maintenance Secretary</h2>
                        </div>
                        <?php



while($maints = mysqli_fetch_array($maints_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($maints['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($maints['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    



                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
                        <?php



while($messs = mysqli_fetch_array($messs_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($messs['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($messs['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>

                    </div>
                    

                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
                        <?php



while($sportss = mysqli_fetch_array($sportss_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($sportss['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($sportss['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                   
<!--END-->
 <div class="sophomore"> 
                    <h1 >JUNIOR YEAR POSITION WINNERS</h1>
                 </div>
                
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>HoSCA Secretary</h2>
                        </div>
                        <?php



while($hoscaj = mysqli_fetch_array($hoscaj_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($hoscaj['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($hoscaj['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    
                    
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                        </div>
                        <?php



while($techj = mysqli_fetch_array($techj_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($techj['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($techj['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    


                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
                        <?php



while($welfj = mysqli_fetch_array($welfj_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($welfj['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($welfj['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    




                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Maintenance Secretary</h2>
                        </div>
                        <?php



while($maintj = mysqli_fetch_array($maintj_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($maintj['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($maintj['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                   


                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
                        <?php



while($messj = mysqli_fetch_array($messj_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($messj['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($messj['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                   



                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
                        <?php



while($sportsj = mysqli_fetch_array($sportsj_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($sportsj['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($sportsj['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                   
<!--END-->
 <div class="sophomore"> 
                    <h1 >SENIOR YEAR POSITION WINNERS</h1>
                 </div>
                 
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>HoSCA Secretary</h2>
                        </div>
                        <?php



while($hoscaf = mysqli_fetch_array($hoscaf_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($hoscaf['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($hoscaf['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    
                    
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                        </div>
                        <?php



while($techf = mysqli_fetch_array($techf_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($techf['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($techf['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                    </div>
                    <?php
}
                    ?>


                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
                        <?php



while($welff = mysqli_fetch_array($welff_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($welff['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($welff['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                       <?php
}
                    ?>
                    </div>




                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Maintenence Secretary</h2>
                        </div>
                        <?php



while($maintf = mysqli_fetch_array($maintf_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($maintf['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($maintf['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                   


             <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
                        <?php



while($messf = mysqli_fetch_array($messf_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($messf['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($messf['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    


                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
                        <?php



while($sportsf = mysqli_fetch_array($sportsf_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($sportsf['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($sportsf['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                   
<!--END-->
 <div class="sophomore"> 
                    <h1 >PG CATEGORIES</h1>
                 </div>
                 
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2> PG GIRLS Secretary</h2>
                        </div>
                        <?php



while($pgg = mysqli_fetch_array($pgg_g)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($pgg['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($pgg['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    
                    
             <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>PG BOYS Secretary</h2>
                        </div>
                        <?php



while($pgb = mysqli_fetch_array($pgb_b)){
?>
                        <div style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536; border-radius: 8px; padding: 10px;background-color: #4158a4;margin: 10px;">
                            <div id="person1"  >
                                <div id="group_1"  >
                                    <img src="<?php echo htmlspecialchars($pgb['image_url'])?>" />
                                    <div style="display: flex; justify-content: space-between;align-items: center">
                                    <h2 ><?php echo htmlspecialchars($pgb['candidate_name']);  ?></h2>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                      </div>
                      <?php
}
                    ?>
                    </div>
                    
<!--END-->








                  </div>





</body>
</html>
