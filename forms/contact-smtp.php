<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Requested Details
    $emailTo = 'info@artechnolabs.com';
    $fromName = $_POST['name'];
    $fromEmail = $_POST['email'];
    $emailSubject = $_POST['subject'];
    $emailMessage = $_POST['message'];

    $smtpEmail = 'alpeshspce2020@gmail.com';
    // $smtpPassword = 'XXXXXXXXXX';

    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    // $mail->SMTPDebug = 3;
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtpEmail;
    $mail->Password   = $smtpPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($emailTo, 'Alpesh Vaghela');

    //Content
    $mail->isHTML(true);
    $mail->Subject = $emailSubject;
    $mail->Body    = "Name: " . $fromName . "<br />Email: " . $fromEmail . " <br />" . $emailMessage;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
