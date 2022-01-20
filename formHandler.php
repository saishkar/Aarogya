<?php
$name = $_POST['name'];
$visitor_email = $_POST['visitor_email'];
$subject = $_POST['subject'];

$email_from = 'modernuniversity';         //doubt

$email_subject = 'New Form Submission';

$email_body = "User Name: $name. \n".
              "User Email: $visitor_email. \n".
              "subject: $subject. \n";
              

$to = "gavandheavinash2001@gmail.com";
$headers = "From: $email_from \r\n";
$headers .="Reply To: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);

header("Location: blog.html")