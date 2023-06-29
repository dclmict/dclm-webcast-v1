<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// load phpdotenv
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = getenv('SMTP_HOST');
    $mail->SMTPAuth = getenv('SMTP_AUTH');
    $mail->Username = getenv('SMTP_USER');
    $mail->Password = getenv('SMTP_PASSWORD');
    $mail->SMTPSecure = getenv('SMTP_SSL');
    $mail->Port = getenv('SMTP_PORT');

    //Recipients
    $mail->setFrom('noreply@dclm.org', 'Mailer');
    $mail->addAddress('info@dclm.org', 'DCLM Webcast');
    $mail->addAddress('');
    $mail->addReplyTo('info@dclm.org');
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