<?php
// require ReCaptcha class
require_once('recaptcha/src/autoload.php');
require_once __DIR__ .'/../../app/config/db.php';

// configure
$from       = 'DCLM WEBCAST <noreply@dclm.org>';
$sendTo     = 'DCLM WEBCAST <prayerrequests@dclm.org>';
$subject    = 'Prayer Request Form Submission';
$fields     = array('name' => 'Name', 'email' => 'Email', 'subject' => 'Subject', 'request' => 'Prayer Request'); // array variable name => Text to appear in the email
$okMessage  = 'Prayer request received. Go in peace; and the God of Israel grant thee thy petition that thou hast asked of him. Amen';
$errorMessage = 'There was an error while submitting your prayer request. Please try again!';
$recaptchaSecret = getenv('RECAPTCHA');

// let's do the sending

try
{
    if (!empty($_POST)) {

        // validate the ReCaptcha, if something is wrong, we throw an Exception, 
        // i.e. code stops executing and goes to catch() block
        
        if (!isset($_POST['g-recaptcha-response'])) {
            throw new \Exception('ReCaptcha is not set.');
        }

        // do not forget to enter your secret key in the config above 
        // from https://www.google.com/recaptcha/admin
        
        $recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());
        
        // we validate the ReCaptcha field together with the user's IP address
        
        $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

        if (!$response->isSuccess()) {
            throw new \Exception('ReCaptcha was not validated.');
        }
        
        // everything went well, insert info into db
        // https://www.cloudways.com/blog/custom-php-mysql-contact-form/
        $conn    = Connect();
        $name    = $conn->real_escape_string($_POST['name']);
        $email   = $conn->real_escape_string($_POST['email']);
        $subj    = $conn->real_escape_string($_POST['subject']);
        $request = $conn->real_escape_string($_POST['request']);
        $query   = "INSERT into prequest_form (name, email, subject, request) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $request . "')";
        $dbsuccess = $conn->query($query);

        // everything went well, we can compose the message, as usually
        $emailText = "Prayer Request Form Details\n======================\n\n";

        foreach ($_POST as $key => $value) {

            if (isset($fields[$key])) {
                $emailText .= "$fields[$key]: \n$value\n\n";
            }
        }
        
        $headers = array(
            'MIME-Version: 1.0',
            'Content-Type: text/plain; charset="UTF-8";',
            'From: ' . $from,
            'Reply-To: ' . $from,
            'Bcc: prayerrequests@dclm.org,' . $email . '',
        );

        mail($sendTo, $subject, $emailText, implode("\n", $headers));

        $responseArray = array('type' => 'success', 'message' => $okMessage);
    }
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}