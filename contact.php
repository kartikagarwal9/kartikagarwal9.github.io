<?php

$name = trim(htmlspecialchars($_POST['name']));
$email = trim(htmlspecialchars($_POST['email']));
$website = trim(htmlspecialchars($_POST['website']));
$address = trim(htmlspecialchars($_POST['address']));
$subject = trim(htmlspecialchars($_POST['subject']));
$message = trim(htmlspecialchars($_POST['message']));


      // *** To configure the MAIL address linked to the hosting or your email
      $to = "your_email@gmail.com";

      $from  = "$email";
      //ini_set("SMTP", "smtp.mondomaine.com");   //For OVH Windows shared hosting

      //Subject of the email
      $Subject = $subject;

      //Context message
      $mail_Data = "";
      $mail_Data .= "Name: ";
      $mail_Data .= $name;
      $mail_Data .= "<br>";
      $mail_Data .= "Website: ";
      $mail_Data .= $website;
      $mail_Data .= "<br>";
      $mail_Data .= "Address: ";
      $mail_Data .= $address;
      $mail_Data .= "<br>";
      $mail_Data .= "<br>";
      $mail_Data .= "Message: ";
      $mail_Data .= $message;
      $mail_Data .= "\n";



      $headers  = "MIME-Version: 1.0 \n";

      $headers .= "Content-type: text/html; charset='utf-8' \n";

      $headers .= "From: $from  \n";

      $CR_Mail = TRUE;


      $CR_Mail = @mail($to, $Subject, $mail_Data, $headers);

      if ($CR_Mail === FALSE) {
        $msg = '<script>alert("Error sending email");</script>';
      }
      else {
        $msg = '<script>alert("Mail send !");</script>';
      }

 ?>
