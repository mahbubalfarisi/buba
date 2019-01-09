<?php
<<<<<<< HEAD
    $name = $_POST['name']; // required
    $subject = $_POST['subject']; // required
    $email_visitor = $_POST['email']; // required
    $pesan = $_POST['messages']; // required

    echo $name;

    $email_from = $email_visitor;
    $email_subject = $subject;
    $email_body = "New message from $email_visitor. \n".
    "email address: $email_visitor \n". "Message:\n  $pesan";

    $to = "mahbub.alfarisi@gmail.com";
    $headers = "From: ".  $email_visitor ."\r\n";
    // $headers .= "Reply-To: $visitor_email \r\n";
    
    // mail($to,$email_subject,$email_body,$headers);
=======

  if (!isset($_POST['submit'])) {
    echo "belum masuk";
  }

    $name = $_POST['name']; // required
    $subject = $_POST['subject']; // required
    $email_from = $_POST['email']; // required
    $pesan = $_POST['messages']; // required

    $email_from = "mahbub.alfarisi@gmail.com"
    $email_subject = $subject;
    $email_body = "New message from". $name. "\n". "Message:\n" . $pesan;

    $to = "mahbub.alfarisi@gmail.com";
    $headers = "From: " . $email_from . "\r\n";
    // $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);
>>>>>>> 48a0a2c74f85d272d093d1d355209471e59a88c1

?>