<?php
 require_once "Mail.php";
// configure
$from = 'Matei Suica <contact@mateisuica.com>';
$to = 'Matei Suica <matei.suica@gmail.com>';
$subject = 'New message from contact form';
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message'); // array variable name => Text to appear in the email
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';
$errorMessage = 'There was an error while submitting the form. Please try again later';

$host = "mail.mateisuica.com";
$username = "contact@mateisuica.com";
$password = "8T.1bV$-bOfn";
// let's do the sending

    $body = "You have new message from contact form\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $body .= "$fields[$key]: $value\n";
        }
    }

    $headers = array ('From' => $from,
       'To' => $to,
       'Subject' => $subject);

    $smtp = Mail::factory('smtp',
      array ('host' => $host,
        'auth' => true,
        'username' => $username,
        'password' => $password));

    $mail = $smtp->send($to, $headers, $body);
    $responseArray = array('type' => 'success', 'message' => $okMessage);

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
else {
    echo $responseArray['message'];
}
