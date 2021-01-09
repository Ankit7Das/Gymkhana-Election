<?php

$webmail = trim(htmlspecialchars($_POST["webid"]));
$password = trim(htmlspecialchars($_POST["pass"]));
$host = trim(htmlspecialchars($_POST["server"]));
$studhost="stud.iitp.ac.in:995/pop3/ssl/novalidate-cert";
$mailhost ="172.16.1.222:995/pop3/ssl/novalidate-cert";

$username =substr($webmail, 0,strpos($webmail, "@"));
if($host === "stud.iitp.ac.in")
 $pop = imap_open('{' .$studhost. '}', $username, $password);
else if($host === "mail.iitp.ac.in")
 $pop = imap_open('{' .$mailhost. '}', $username, $password);
 else{
    echo "<center>Please select webmail server</center>\n";
    echo "<script> location.href='../public/login_page.html'; </script>";
 }



if ($pop == false) 
{
    echo "<center>Authentication Failed</center>\n";
    echo "<script> location.href='../public/error_login.html'; </script>";
} 
else 
{
      session_start();
      imap_close($pop);
      $_SESSION['webmail'] = $webmail;
      echo "<script> location.href='../routes/UserDetails.php'; </script>";
}

?>