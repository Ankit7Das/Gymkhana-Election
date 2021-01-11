
 <!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
     <head>
     <link rel="icon" href="skins/logo.png" type="image/ico">
         <title>
             Redirecting to Election..
         </title>
     </head>
     <body>
     <diV style="text-align: center;">
         <h3>
             You have already registered. We are redirecting you to Election Page 
         </h3>
     </diV>
         <?php
           sleep(3);
           echo "<script> location.href='../routes/electionPage.php'; </script>";
           ?>
           
     </body>
 </html>