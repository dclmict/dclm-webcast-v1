<?php
// require ReCaptcha class
require_once('../recaptcha/src/autoload.php');
require_once('db.php');

// configure
$from       = 'DCLM WEBCAST <noreply@dclm.org>';
$sendTo     = 'DCLM WEBCAST <testimonies@dclm.org>';
$subject    = 'Testimony Form Submission';
$fields     = array('name' => 'Name', 'email' => 'Email', 'subject' => 'Subject', 'testimony' => 'Testimony'); // array variable name => Text to appear in the email
$okMessage  = 'Testimony received. Your lips shall continue to declare of the goodness and works of the Lord in the land of the living. Amen';
$errorMessage = 'There was an error while submitting your testimony. Please try again!';
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
        $testimony = $conn->real_escape_string($_POST['testimony']);
        $query   = "INSERT into testimony_form (name, email, subject, testimony) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $testimony . "')";
        $dbsuccess = $conn->query($query);

        // everything went well, we can compose the message, as usually
        $emailText = "Testimony Form Details\n===================\n\n";

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
            'Bcc: testimonies@dclm.org,' . $email . '',
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