<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function send_email($email, $subject, $message)
{
    $mail = new PHPMailer();
    try {
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host         = 'smtp.gmail.com'; //smtp.google.com
        $mail->SMTPAuth     = true;
        $mail->Username     = 'info.dip.sarkar22@gmail.com';
        $mail->Password     = 'dvuiwaqzttugfrih';
        $mail->SMTPSecure   = 'tls';
        $mail->Port         = 587;
        $mail->Subject      =  $subject;
        $mail->Body         = $message;
        $mail->setfrom('info.dip.sarkar@gmail.com', 'Employee Portal');

        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->send();


        // if (!$mail->send()) {
        //     echo "Something went wrong. Please try again.";
        // } else {
        //     echo "Email sent successfully. => " . $email;
        //     exit;
        // }

    } catch (Exception $e) {
        echo "Something went wrong. Please try again.";
    }
}