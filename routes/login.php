<?php

$webmail = trim(htmlspecialchars($_POST["webid"]));
$password = trim(htmlspecialchars($_POST["pass"]));
$mailhost="stud.iitp.ac.in:995/pop3/ssl/novalidate-cert";

$username =substr($webmail, 0,strpos($webmail, "@"));
$pop = imap_open('{' .$mailhost. '}', $username, $password);

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
      echo "<script> location.href='../public/User_details_new.html'; </script>";
}

?>