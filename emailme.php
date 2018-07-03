<?php

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

?>