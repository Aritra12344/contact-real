<?php

$name $_POST['name']; $visitor_email = $_POST['email'];

= $message = $_POST['message'];

$email from = 'gamingwithus028@gmail.com;

$email subject = "New Form Submission";

$email_body = "User Name: $name.\n". "User Email: $visitor_email.\n". IUser Message: $message.\n";

$to "aritraghosh625@gmail.com"; =

$headers = "From: $email from \r\n";

$headers .= "Reply-To: Svisitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: thankyou.html");

?>
