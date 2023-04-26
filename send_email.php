<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$to = "Liammoquin06@gmail.com"; // replace with your own email address
$subject = $_POST['subject'];
$content = $_POST['content'];
$headers = "From: ".$_POST['email']."\r\n";
$headers .= "Reply-To: ".$_POST['email']."\r\n";

// Send email
mail($to, $subject, $content, $headers);

// Redirect back to Contact.html
header('Location: Contact.html');
exit;
// https://dev.to/charalambosioannou/create-a-static-webpage-with-a-contact-form-on-github-pages-3532
?>