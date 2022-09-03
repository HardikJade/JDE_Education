<?php
$name = $_POST["name"];
$email = $_POST['email'];
$sub = $_POST['subject'];
$message = $_POST['message'];
$to_email = "hkj28082000@gmail.com";
$subject = $sub;
$body = "Mail Fron: " . $name . "\n" . "Sender Email : " . $email . "\n" . "Message: " . $message . "\n";
$headers = "From: hardikjade2808@gmail.com";

// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Thank You For Contacting Us :)";
// } else {
//     echo "Email Sending Fail";
// }
?>