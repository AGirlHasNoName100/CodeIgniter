<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Email extends CI_Controller{
     function __construct(){
         parent::__construct();
     }

     function send(){
         //load PHP Mailer library
         $this->load->library('phpmailer_lib');

         //PHPMAiler object
         $mail = $this->phpmailer_lib->load();

         //SMTP configuration
         $mail->isSMTP();
         $mail->Host = 'smtp.gmail.com';
         $mail->SMTPAuth = true;
         $mail->Username = 'emmyakinyi24@gmail.com';
         $mail->Password = 'hamburger24';
         $mail->SMTPSecure = 'tls';
         $mail->Port = 587;

         $mail->setFrom('info@mothergoose.com', 'MotherGooseKe');
         $mail->addReplyTo('info@example.com', 'MotherGooseKe');

         //add a Recipient
         $mail->addAddress('mixology4dummies@gmail.com');

         //Email subject
         $mail->Subject = 'Booking Confirmation';

         //set email format to HTML
         $mail->isHTML(true);

         //Email body content
         $mailContent = "<h1>Email Send Using PHP Mailer</h1>
         <p>This is a test Email.</p>";
         $mail->Body = $mailContent;

         //Send Email
         if(!$mail->send()){
           echo 'Message not Sent';
           echo 'Mailer Error'.$mail->ErrorInfo;

         }
         else{
            echo 'Message Sent';
         }
     }
         
     }
 


?>