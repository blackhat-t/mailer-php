<?php

    // $mailto = $obj['mail_to'];
    // $mailSub = $obj['mail_sub'];
    // $mailMsg = $obj['mail_msg'];

    $mailto = 'somebody@@gmail.com';
    $mailSub = 'Regarding Mail';
    $mailMsg = 'Here is your Message';

    /*Credi*/
    $ADMIN_MAIL = "support@admin@mailserrver.com";
    $ADMIN_PASS = "Q(PlT&_aO0*(JH";

    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;
    $mail ->Host = "support@admin.com";
    $mail ->Port = 587;
    $mail ->IsHTML(true);
    $mail ->Username = $ADMIN_MAIL;
    $mail ->Password = $ADMIN_PASS;
    $mail ->SetFrom("support@admin@mailserver.com");
    $mail ->Subject = $mailSub;
    $mail ->Body = $mailMsg;
    $mail ->AddAddress($mailto);
    $mail->SMTPAuth = false;
    $mail->SMTPAutoTLS = false; 
    if(!$mail->Send())
    {
        echo 'Mail Not Sent';
    }
    else
    {
       echo 'Mail Sent';
       
    }
