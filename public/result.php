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
 $db = $database->connect();


 //girls
$techg_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=2 AND position="technical" AND degree =0 ';
 $stmt = $db->prepare($techg_sql);
        $stmt->execute();
        $techg = $stmt->fetchAll(PDO::FETCH_ASSOC);

        

$welg_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=2 AND position="welfare" AND degree =0';
$stmt = $db->prepare($welg_sql);
        $stmt->execute();
        $welg = $stmt->fetchAll(PDO::FETCH_ASSOC);
$hoscag_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=2 AND position="hosca" AND degree = 0';
$stmt = $db->prepare($hoscag_sql);
        $stmt->execute();
        $hoscag = $stmt->fetchAll(PDO::FETCH_ASSOC);
$messg_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=2 AND position="mess" AND degree = 0';
$stmt = $db->prepare($messg_sql);
        $stmt->execute();
        $messg = $stmt->fetchAll(PDO::FETCH_ASSOC);
$maintg_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=2 AND position="maintenance" AND degree = 0';
$stmt = $db->prepare($maintg_sql);
        $stmt->execute();
        $maintg = $stmt->fetchAll(PDO::FETCH_ASSOC);
$sportsg_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=2 AND position="sports" AND degree = 0';
$stmt = $db->prepare($sportsg_sql);
        $stmt->execute();
        $sportsg = $stmt->fetchAll(PDO::FETCH_ASSOC);
//pg girl
$pgg_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=2  AND degree <>0';
$stmt = $db->prepare($pgg_sql);
        $stmt->execute();
        $pgg = $stmt->fetchAll(PDO::FETCH_ASSOC);
//sophomore 
$techss_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="technical" AND degree = 0 AND year=1';
$stmt = $db->prepare($techss_sql);
        $stmt->execute();
        $techss = $stmt->fetchAll(PDO::FETCH_ASSOC);
$welfs_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="welfare" AND degree = 0 AND year=1';
$stmt = $db->prepare($welfs_sql);
        $stmt->execute();
        $welfs = $stmt->fetchAll(PDO::FETCH_ASSOC);
$sportss_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="sports" AND degree = 0 AND year=1';
$stmt = $db->prepare($sportss_sql);
        $stmt->execute();
        $sportss = $stmt->fetchAll(PDO::FETCH_ASSOC);
$hoscas_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="hosca" AND degree = 0 AND year=1';
$stmt = $db->prepare($hoscas_sql);
        $stmt->execute();
        $hoscas = $stmt->fetchAll(PDO::FETCH_ASSOC);
$maints_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="maintenance" AND degree = 0 AND year=1';
$stmt = $db->prepare($maints_sql);
        $stmt->execute();
        $maints = $stmt->fetchAll(PDO::FETCH_ASSOC);
$messs_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="mess" AND degree = 0 AND year=1';
$stmt = $db->prepare($messs_sql);
        $stmt->execute();
        $messs = $stmt->fetchAll(PDO::FETCH_ASSOC);

//junior year
$techj_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="technical" AND degree = 0 AND year=2';
$stmt = $db->prepare($techj_sql);
        $stmt->execute();
        $techj = $stmt->fetchAll(PDO::FETCH_ASSOC);
$welfj_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="welfare" AND degree = 0 AND year=2';
$stmt = $db->prepare($welfj_sql);
        $stmt->execute();
        $welfj = $stmt->fetchAll(PDO::FETCH_ASSOC);
$sportsj_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="sports" AND degree = 0 AND year=2';
$stmt = $db->prepare($sportsj_sql);
        $stmt->execute();
        $sportsj = $stmt->fetchAll(PDO::FETCH_ASSOC);
$hoscaj_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="hosca" AND degree = 0 AND year=2';
$stmt = $db->prepare($hoscaj_sql);
        $stmt->execute();
        $hoscaj = $stmt->fetchAll(PDO::FETCH_ASSOC);
$maintj_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="maintenance" AND degree = 0 AND year=2';
$stmt = $db->prepare($maintj_sql);
        $stmt->execute();
        $maintj = $stmt->fetchAll(PDO::FETCH_ASSOC);
$messj_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="mess" AND degree = 0 AND year=2';
$stmt = $db->prepare($messj_sql);
        $stmt->execute();
        $messj = $stmt->fetchAll(PDO::FETCH_ASSOC);
//senior yaer
$techf_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="technical" AND degree = 0 AND year=3';
$stmt = $db->prepare($techf_sql);
        $stmt->execute();
        $techf = $stmt->fetchAll(PDO::FETCH_ASSOC);
$welff_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="welfare" AND degree = 0 AND year=3';
$stmt = $db->prepare($welff_sql);
        $stmt->execute();
        $welff = $stmt->fetchAll(PDO::FETCH_ASSOC);
$sportsf_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="sports" AND degree = 0 AND year=3';
$stmt = $db->prepare($sportsf_sql);
        $stmt->execute();
        $sportsf = $stmt->fetchAll(PDO::FETCH_ASSOC);
$hoscaf_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="hosca" AND degree = 0 AND year=3';
$stmt = $db->prepare($hoscaf_sql);
        $stmt->execute();
        $hoscaf = $stmt->fetchAll(PDO::FETCH_ASSOC);
$maintf_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="maintenance" AND degree = 0 AND year=3';
$stmt = $db->prepare($maintf_sql);
        $stmt->execute();
        $maintf = $stmt->fetchAll(PDO::FETCH_ASSOC);
$messf_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1 AND position="mess" AND degree = 0 AND year=3';
$stmt = $db->prepare($messf_sql);
        $stmt->execute();
        $messf = $stmt->fetchAll(PDO::FETCH_ASSOC);
//vp
$vp_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE  position="vp"';
$stmt = $db->prepare($vp_sql);
        $stmt->execute();
        $vp = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
//pg boys
$pgb_sql='SELECT id, candidate_name, roll_no, image_url,MAX(votes) FROM candidates WHERE gender=1  AND degree <> 0';
$stmt = $db->prepare($pgb_sql);
        $stmt->execute();
        $pgb = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

  <div>
    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>VICE PRESIDENT</h2>
                        </div>
  <?php



    if(isset($vp['image_url'])&& isset($vp['candidate_name'])):
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
                    endif; 
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



if(isset($hoscag['image_url'])&& isset($hoscag['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                    


                    
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                        </div>
                        <?php



if(isset($techg['image_url'])&& isset($techg['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                    

                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
                        <?php



if(isset($welg['image_url'])&& isset($welg['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>



                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Maintenance Secretary</h2>
                        </div>
                        <?php



    if(isset($maintg['image_url'])&& isset($maintg['candidate_name'])):
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
                    endif; 
                    ?>

                    </div>
                   

                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
                        <?php



    if(isset($messg['image_url'])&& isset($messg['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                    



                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
                        <?php



    if(isset($sportsg['image_url'])&& isset($sportsg['candidate_name'])):
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
                    endif; 
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



    if(isset($hoscas['image_url'])&& isset($hoscas['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                   
                   
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                        </div>
                        <?php



    if(isset($techss['image_url'])&& isset($techss['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                    


                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
                        <?php



    if(isset($welfs['image_url'])&& isset($welfs['candidate_name'])):
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
                    endif; 
                    ?>

                    </div>
                    


                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Maintenance Secretary</h2>
                        </div>
                        <?php



    if(isset($maints['image_url'])&& isset($maints['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                    



                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
                        <?php



    if(isset($messs['image_url'])&& isset($messs['candidate_name'])):
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
                    endif; 
                    ?>

                    </div>
                    

                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
                        <?php



if(isset($sportss['image_url'])&& isset($sportss['candidate_name'])):
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
                    endif; 
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



if(isset($hoscaj['image_url'])&& isset($hoscaj['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                    
                    
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                        </div>
                        <?php



if(isset($techj['image_url'])&& isset($techj['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                    


                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
                        <?php



if(isset($welfj['image_url'])&& isset($welfj['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                    




                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Maintenance Secretary</h2>
                        </div>
                        <?php



if(isset($maintj['image_url'])&& isset($maintj['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                   


                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
                        <?php



if(isset($messj['image_url'])&& isset($messj['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                   



                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
                        <?php



if(isset($sportsj['image_url'])&& isset($sportsj['candidate_name'])):
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
                    endif; 
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



if(isset($hoscaf['image_url'])&& isset($hoscaf['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                    
                    
                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                        </div>
                        <?php



if(isset($techf['image_url'])&& isset($techf['candidate_name'])):
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
                    endif; 
                    ?>


                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
                        <?php



if(isset($welff['image_url'])&& isset($welff['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>




                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Maintenence Secretary</h2>
                        </div>
                        <?php



if(isset($maintf['image_url'])&& isset($maintf['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                   


             <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
                        <?php



if(isset($messf['image_url'])&& isset($messf['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                    


                    <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
                        <?php



if(isset($sportsf['image_url'])&& isset($sportsf['candidate_name'])):
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
                    endif; 
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



if(isset($pgg['image_url'])&& isset($pgg['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                    
                    
             <div id="grid_1_ek1"   >
                        <div id="hosca_secretary" >
                            <h2>PG BOYS Secretary</h2>
                        </div>
                        <?php



if(isset($pgb['image_url'])&& isset($pgb['candidate_name'])):
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
                    endif; 
                    ?>
                    </div>
                    
<!--END-->








                  </div>





</body>
</html>
