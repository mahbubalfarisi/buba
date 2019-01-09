<?php
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

?>