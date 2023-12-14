<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone  \n Email: $email \n Message: $message";
$recipient = "info@mangosorange.co.in";
$subject = "Web Query from Mangosorange.co.in";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! We will get back to you soon";
?>