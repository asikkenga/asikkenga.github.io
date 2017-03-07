<?php $name-name = $_POST['your-name'];
$email = $_POST['email'];
$your-subject = $POST['your-subject'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "a.sikkenga@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>