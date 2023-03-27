<?php
// load phpdotenv
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = getenv('SMTP_HOST');  // Specify main and backup SMTP servers
    $mail->SMTPAuth = getenv('SMTP_AUTH');                // Enable SMTP authentication
    $mail->Username = getenv('SMTP_USER');                // SMTP username
    $mail->Password = getenv('SMTP_PASSWORD');            // SMTP password
    $mail->SMTPSecure = getenv('SMTP_SSL');              // Enable TLS encryption
    $mail->Port = getenv('SMTP_PORT');                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('dclmict@gmail.com', 'DCLM Gmail');     // Add a recipient
    $mail->addAddress('');               // Name is optional
    $mail->addReplyTo('dclmict@gmail.com', 'Information');
    $mail->addCC('');
    $mail->addBCC('');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent successfully';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}