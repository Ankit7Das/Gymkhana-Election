<!-- 
/*
 *	This content is generated from the PSD File Info.
 *	(Alt+Shift+Ctrl+I).
 *
 *	@desc 		
 *	@file 		vp_selection_success_page___1
 *	@date 		0
 *	@title 		VP selection success page  1
 *	@author 	
 *	@keywords 	
 *	@generator 	Export Kit v1.3.xd
 *
*/
 -->

<?php

    include('../models/user.php');
    include('../database/database.php');

    session_start();

    //login check

    if((isset($_SESSION['gender']) && isset($_SESSION['year']) && isset($_SESSION['degree']))){
        if($_SESSION['gender']==='Male'){
            $gkey=1;
        }else{
            $gkey=2;
        }

        if($_SESSION['year']==='2nd'){
            $ykey=1;
        }elseif($_SESSION['year']==='3rd'){
            $ykey=2;
        }elseif($_SESSION['year']==='4th'){
            $ykey=3;
        }else{
            $ykey=4;
        }

        $degree = $_SESSION['degree'];
    }else{
        echo "<script> location.href='../public/error.html'; </script>";
    }

    $database = new Database();
    $db = $database->connect();

    //query statement for the taking info
    if($degree===0):
        if($gkey===1):
            $tech_sql='SELECT id, candidate_name, roll_no, position, image_url FROM candidates WHERE gender=' . $gkey . ' AND year=' . $ykey . ' AND position="technical" AND degree = '.$degree.'';
            $welf_sql='SELECT id, candidate_name, roll_no, position, image_url FROM candidates WHERE gender='.$gkey.' AND year='.$ykey.' AND position="welfare" AND degree = '.$degree.'';
            $hosca_sql='SELECT id, candidate_name, roll_no, position,image_url FROM candidates WHERE gender='.$gkey.' AND year='.$ykey.' AND position="hosca" AND degree = '.$degree.'';
            $maintenance_sql='SELECT id, candidate_name, roll_no, position,image_url FROM candidates WHERE gender='.$gkey.' AND year='.$ykey.' AND position="maintenance" AND degree = '.$degree.'';
            $sports_sql='SELECT id, candidate_name, roll_no, position,image_url FROM candidates WHERE gender='.$gkey.' AND year='.$ykey.' AND position="sports" AND degree = '.$degree.'';
            $mess_sql='SELECT id, candidate_name, roll_no, position,image_url FROM candidates WHERE gender='.$gkey.' AND year='.$ykey.' AND position="mess" AND degree = '.$degree.'';
        else:
            $tech_sql='SELECT id, candidate_name, roll_no, position,image_url FROM candidates WHERE gender=' . $gkey . ' AND position="technical" AND degree = '.$degree.'';
            $welf_sql='SELECT id, candidate_name, roll_no, position,image_url FROM candidates WHERE gender='.$gkey.' AND position="welfare" AND degree = '.$degree.'';
            $hosca_sql='SELECT id, candidate_name, roll_no, position,image_url FROM candidates WHERE gender='.$gkey.' AND position="hosca" AND degree = '.$degree.'';
            $maintenance_sql='SELECT id, candidate_name, roll_no, position,image_url FROM candidates WHERE gender='.$gkey.' AND position="maintenance" AND degree = '.$degree.'';
            $sports_sql='SELECT id, candidate_name, roll_no, position,image_url FROM candidates WHERE gender='.$gkey.' AND position="sports" AND degree = '.$degree.'';
            $mess_sql='SELECT id, candidate_name, roll_no, position,image_url FROM candidates WHERE gender='.$gkey.' AND position="mess" AND degree = '.$degree.'';    
        endif;

        //tech array
        $stmt = $db->prepare($tech_sql);
        $stmt->execute();
        $techs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //welf array
        $stmt = $db->prepare($welf_sql);
        $stmt->execute();
        $welfs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //hosca array
        $stmt = $db->prepare($hosca_sql);
        $stmt->execute();
        $hoscas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //maintenance array
        $stmt = $db->prepare($maintenance_sql);
        $stmt->execute();
        $maintenances = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //sports array
        $stmt = $db->prepare($sports_sql);
        $stmt->execute();
        $sports = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //mess array
        $stmt = $db->prepare($mess_sql);
        $stmt->execute();
        $messes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    else:
        $sec_sql='SELECT id, candidate_name, roll_no, position, image_url FROM candidates WHERE gender='.$gkey.' AND degree = '.$degree.'';

        //sec array
        $stmt = $db->prepare($sec_sql);
        $stmt->execute();
        $secs = $stmt->fetchAll(PDO::FETCH_ASSOC);

    endif;

    //vp sql
    $vp_sql='SELECT id, candidate_name, roll_no, position, image_url FROM candidates WHERE position="vp"';

    //vp array
    $stmt = $db->prepare($vp_sql);
    $stmt->execute();
    $vps = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //none sql
    //$none_sql='SELECT id, candidate_name, roll_no, position, image_url FROM candidates WHERE position="none"';

    //none of these option
    //$stmt = $db->prepare($none_sql);
    //$stmt->execute();
    //$none = $stmt->fetchAll(PDO::FETCH_ASSOC);

    function split_name($name) {
        $name = trim($name);
        $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
        $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
        return array($first_name, $last_name);
    }



?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8" />
        <title>Election Home Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" >
        <link rel="StyleSheet" href="../public/css/election_home.css" /> 
        <style>
    .navbar1 {
      display: flex;
      justify-content: center;
      align-items: center;
      /*max-width: 900px;*/
      width: 100%;
      margin: 0 auto;
      background-color: black;
      color: azure;

    }
        </style>
        <script>
            document.getElementById("submit").onclick = function() {
            let allAreFilled = true;
                document.getElementById("myForm").querySelectorAll("[required]").forEach(function(i) {
                    if (!allAreFilled) return;
                    if (!i.value) allAreFilled = false;
                    if (i.type === "radio") {
                        let radioValueCheck = false;
                        document.getElementById("myForm").querySelectorAll(`[name=${i.name}]`).forEach(function(r) {
                            if (r.checked) radioValueCheck = true;
                        })
                        allAreFilled = radioValueCheck;
                    }
                })
                if (!allAreFilled) {
                    alert('Fill all the fields');
                }
            };
        </script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>
        <!-- Add your custom HEAD content here -->
 
    </head>
    <body>
        <div class="navbar1">
            <img src="../public/skins/logo.png" id="logo" />
            <h1>Gymkhana Election 2020</h1>  
        </div>
        <div>
            <div>
                <div class="sophomore">
                    <?php if ($ykey===1): ?>
                    <h1>Sophomore year Positions</h1>
                    <?php elseif ($ykey===2): ?>
                    <h1>Junior year Positions</h1>
                    <?php else: ?>
                    <h1>Senior year Positions</h1>
                    <?php endif; ?>
                </div>
                 
                <form action="successVote.php" method="POST" id="myForm" onSubmit="if(!confirm('Do you really want to submit the form?')){return false;}"> 
                    
                <?php 
                
                $i=0 ;
                
                if($degree===0):
                    if(count($techs)>0):
                        $i++;
                ?>
    
                        <div id="hosca_secretary" >
                            <h2>Technical Secretary</h2>
                        </div>
                        <div class="container">
                            <div class="row">
                                <?php foreach($techs as $tech){ ?>
                                <figure class="snip1218 col" style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536;padding: 0; border-radius: 8px; background-color: #aaaabd;">
                                    <div class="image"><img src="<?php echo htmlspecialchars($tech['image_url']) ?>" alt="sample70" width="140" height ="140"/>
                                    </div>
                                    <figcaption>
                                    <?php $name=split_name(htmlspecialchars($tech['candidate_name']));  ?>
                                    <h3><?php echo $name['0'] ?></br><span> <?php echo $name['1'] ?></span></h3>
                                    <h5>Vote</h5>
                                    <div style="align-items: center;">
                                        <input type="radio" name="votecheck[<?php echo $i ?>]" value="<?php echo $tech['id']; ?>" class="gym" required>
                                    </div>
                                    </figcaption>
                                </figure>
                                <?php } ?>
                            </div>
                        </div>
                    <?php
                    endif; 
                    ?>
    
                    <?php 
                    if(count($welfs)>0):
                        $i++;
                    ?>
    
                        <div id="hosca_secretary" >
                            <h2>Welfare Secretary</h2>
                        </div>
                        <div class="container">
                            <div class="row">
                                <?php foreach($welfs as $welf){ ?>
                                <figure class="snip1218 col" style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536;padding: 0; border-radius: 8px; background-color: #aaaabd;">
                                    <div class="image"><img src="<?php echo htmlspecialchars($welf['image_url']) ?>" alt="sample70" width="140" height ="140" />
                                    </div>
                                    <figcaption>
                                    <?php $name=split_name(htmlspecialchars($welf['candidate_name'])) ?>
                                    <h3><?php echo $name['0'] ?></br><span> <?php echo $name['1'] ?></span></h3>
                                    <h5>Vote</h5>
                                    <div style="align-items: center;">
                                        <input type="radio" name="votecheck[<?php echo $i ?>]" value="<?php echo $welf['id']; ?>" class="gym" required>
                                    </div>
                                    </figcaption>
                                </figure>
                                <?php } ?>
                            </div>
                        </div>
                    <?php
                    endif; 
                    ?>
    
                    <?php 
                    if(count($hoscas)>0):
                        $i++;
                    ?>
    
                        <div id="hosca_secretary" >
                            <h2>HoSCA Secretary</h2>
                        </div>
                        <div class="container">
                            <div class="row">
                                <?php foreach($hoscas as $hosca){ ?>
                                <figure class="snip1218 col" style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536;padding: 0; border-radius: 8px; background-color: #aaaabd;">
                                    <div class="image"><img src="<?php echo htmlspecialchars($hosca['image_url']) ?>" alt="sample70" width="140" height ="140"/>
                                    </div>
                                    <figcaption>
                                    <?php $name=split_name(htmlspecialchars($hosca['candidate_name'])) ?>
                                    <h3><?php echo $name['0'] ?></br><span> <?php echo $name['1'] ?></span></h3>
                                    <h5>Vote</h5>
                                    <div style="align-items: center;">
                                        <input type="radio" name="votecheck[<?php echo $i ?>]" value="<?php echo $hosca['id']; ?>" class="gym" required>
                                    </div>
                                    </figcaption>
                                </figure>
                                <?php } ?>
                            </div>
                        </div>        
                    <?php 
                    endif; 
                    ?>
    
                    <?php if(count($maintenances)>0):
                        $i++;
                    ?>
    
                        <div id="hosca_secretary" >
                            <h2>Maintenance Secretary</h2>
                        </div>
                        <div class="container">
                            <div class="row">
                                <?php foreach($maintenances as $maintenance){ ?>
                                <figure class="snip1218 col" style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536;padding: 0; border-radius: 8px; background-color: #aaaabd;">
                                    <div class="image"><img src="<?php echo htmlspecialchars($maintenance['image_url']) ?>" alt="sample70" width="140" height ="140" />
                                    </div>
                                    <figcaption>
                                    <?php $name=split_name(htmlspecialchars($maintenance['candidate_name'])) ?>
                                    <h3><?php echo $name['0'] ?></br><span> <?php echo $name['1'] ?></span></h3>
                                    <h5>Vote</h5>
                                    <div style="align-items: center;">
                                        <input type="radio" name="votecheck[<?php echo $i ?>]" value="<?php echo $maintenance['id']; ?>" class="gym" required>
                                    </div>
                                    </figcaption>
                                </figure>
                                <?php } ?>
                            </div>
                        </div>
                    <?php 
                    endif; 
                    ?>
    
                    <?php 
                    if(count($sports)>0):
                        $i++;
                    ?>
    
                        <div id="hosca_secretary" >
                            <h2>Sports Secretary</h2>
                        </div>
                        <div class="container">
                            <div class="row">
                                <?php foreach($sports as $sport){ ?>
                                <figure class="snip1218 col" style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536;padding: 0; border-radius: 8px; background-color: #aaaabd;">
                                    <div class="image"><img src="<?php echo htmlspecialchars($sport['image_url']) ?>" alt="sample70" width="140" height ="140"/>
                                    </div>
                                    <figcaption>
                                    <?php $name=split_name(htmlspecialchars($sport['candidate_name'])) ?>
                                    <h3><?php echo $name['0'] ?></br><span> <?php echo $name['1'] ?></span></h3>
                                    <h5>Vote</h5>
                                    <div style="align-items: center;">
                                        <input type="radio" name="votecheck[<?php echo $i ?>]" value="<?php echo $sport['id']; ?>" class="gym" required>
                                    </div>
                                    </figcaption>
                                </figure>
                                <?php } ?>
                            </div>
                        </div>        
                    <?php 
                    endif; 
                    ?>
    
                    <?php 
                    if(count($messes)>0):
                        $i++;
                    ?>
    
                        <div id="hosca_secretary" >
                            <h2>Mess Secretary</h2>
                        </div>
                        <div class="container">
                            <div class="row">
                                <?php foreach($messes as $mess){ ?>
                                <figure class="snip1218 col" style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536;padding: 0; border-radius: 8px; background-color: #aaaabd;">
                                    <div class="image"><img src="<?php echo htmlspecialchars($mess['image_url']) ?>" alt="sample70" width="140" height ="140"/>
                                    </div>
                                    <figcaption>
                                    <?php $name=split_name(htmlspecialchars($mess['candidate_name'])) ?>
                                    <h3><?php echo $name['0'] ?></br><span> <?php echo $name['1'] ?></span></h3>
                                    <h5>Vote</h5>
                                    <div style="align-items: center;">
                                        <input type="radio" name="votecheck[<?php echo $i ?>]" value="<?php echo $mess['id']; ?>" class="gym" required>
                                    </div>
                                    </figcaption>
                                </figure>
                                <?php } ?>
                            </div>
                        </div>
                    <?php 
                    endif; 
                else:
                    if(count($secs)>0):
                        $i++;
                    ?>

                        <div id="hosca_secretary" >
                            <h2>Secretary</h2>
                        </div>
                        <div class="container">
                            <div class="row">
                                <?php foreach($secs as $sec){ ?>
                                <figure class="snip1218 col" style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536;padding: 0; border-radius: 8px; background-color: #aaaabd;">
                                    <div class="image"><img src="<?php echo htmlspecialchars($sec['image_url']) ?>" alt="sample70" width="140" height ="140"/>
                                    </div>
                                    <figcaption>
                                    <?php $name=split_name(htmlspecialchars($sec['candidate_name'])) ?>
                                    <h3><?php echo $name['0'] ?></br><span> <?php echo $name['1'] ?></span></h3>
                                    <h5>Vote</h5>
                                    <div style="align-items: center;">
                                        <input type="radio" name="votecheck[<?php echo $i ?>]" value="<?php echo $sec['id']; ?>" class="gym" required>
                                    </div>
                                    </figcaption>
                                </figure>
                                <?php } ?>
                            </div>
                        </div>
                    <?php 
                    endif; 
                endif;    
                    ?>



                <?php 
                if(count($vps)>0):
                    $i++;
                ?>

                    <div id="hosca_secretary" >
                        <h2>VP Gymkhana</h2>
                    </div>
                    <div class="container">
                    <div class="row">
                        <?php foreach($vps as $vp){ ?>
                        <figure class="snip1218 col" style="display: flex;width: 97%;justify-content: space-around;flex-wrap: wrap; border: 3px solid #353536;padding: 0; border-radius: 8px; background-color: #aaaabd;">
                            <div class="image"><img src="<?php echo htmlspecialchars($vp['image_url']) ?>" alt="sample70" width="200" height ="200"/>
                            </div>
                            <figcaption>
                            <?php $name=split_name(htmlspecialchars($vp['candidate_name'])) ?>
                            <h3><?php echo $name['0'] ?></br><span> <?php echo $name['1'] ?></span></h3>
                            <h5>Vote</h5>
                            <div style="align-items: center;">
                                <input type="radio" name="votecheck[<?php echo $i ?>]" value="<?php echo $vp['id']; ?>" class="gym" required>
                            </div>
                            </figcaption>
                        </figure>
                        <?php } ?>
                    </div>
                    </div>
                <?php 
                endif; 
                ?>
                
                    <div class="button-container" style="text-align: center;">
                        <button type="submit" name="submit" class="button" id="submit"><span>Submit</span></button>
                    </div>

                </form>
                        
                        
            </div>
        </div>
    </body>
</html>