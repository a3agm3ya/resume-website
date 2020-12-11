<?php
  $name=$_POST['name'];
  $visitor=$_POST['email'];
  $message=$_POST['msg'];
  $email_from='a3agm3ya@gmail.com';
  $email_subject=$_POST['subject'];
  $email_body= "user name: $name. \n".
              "Email: $visitor. \n".
              "Message: $msg .\n";
  $to = "a3agm3ya@yahoo.com";
  $headers = "From : $email_from \r\n";
  $headers .="Reply-to: $visitor \r\n";
  mail($to,$email_subject,$email_body,$headers);
  header("Location: homepage.html");
?>
