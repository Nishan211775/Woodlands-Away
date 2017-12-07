<?php

include_once '../../PHPMailer/PHPMailer-master/PHPMailerAutoload.php';


   $mailto = $_SESSION['email'];
   $mailSub = "Booking Accepted";
   $mailMsg = "Your booking has been accepted";
   $mail = new PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = 465; // or 587;
    $mail ->IsHTML(true);
    $mail ->Username = "trilokbhujel@gmail.com";
    $mail ->Password = "trilok123";
    $mail ->SetFrom("Woodlands Away");
    $mail ->Subject = $mailSub;
    $mail ->Body = $mailMsg;
    $mail ->AddAddress($mailto);

   if(!$mail->Send()) {
       echo "Mail Not Sent";
   }
   else {
       ?>
       <script>
           alert("Email has been send");
           window.location.href = '../view/home.php';
       </script>
       <?php
   }





   

