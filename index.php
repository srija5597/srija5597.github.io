<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'sahashonai123@gmail.com';
$email_subject = 'New form submission';
$email_body = "User Name: $name.\n"."User Email: $visitor_email.\n"."User Message: $message.\n";

$to = 'sahashonai123@gmail.com';
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $email_from \r\n";
mail($to, $email_subject, $email_body, $headers);
header("location:index.html");
?>