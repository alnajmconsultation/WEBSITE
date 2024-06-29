<?php
  // configure email settings
  $host = 'mtp.gmail.com';
  $username = 'alnajmqaconsultation@gmail.com';
  $password = 'AlNajmPass1@';
  $to = 'himaamail7@gmail.com';
  $from = 'alnajmqaconsultation@gmail.com';

  // retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // create message body
  $messageBody = "Name $name<br/> Email $email<br/> subject $subject<br/> Message $message";

  // send email using PHPMailer
  require 'PHPMailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->Host = $host;
  $mail->Username = $username;
  $mail->Password = $password;
  $mail->From = $from;
  $mail->FromName = $name;
  $mail->addAddress($to);
  $mail->Subject = 'Contact Form';
  $mail->Body = $messageBody;

  if (!$mail->send()) {
    echo 'Error sending email: '. $mail->ErrorInfo;
  } else {
    echo 'Email sent successfully!';
  }
?>