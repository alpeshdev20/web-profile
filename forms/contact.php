<?php
$to = 'alpesh.dev20@gmail.com';
$from_name = $_POST['name'];
$from_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$header = "From:$from_email \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

if (mail($subject, $message, $header)) {
    echo "Mail has been sent successfully.";
} else {
    echo "Unable to send the email.";
}
