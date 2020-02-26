<?php

//https://www.qservers.net/process/knowledgebase.php?action=displayarticle&id=52
// ini_set("include_path", '/home/ballers7/php:' . ini_get("include_path") );

require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge

require('logindetails.php');

$from = "no-reply@ballers.ng <Welcome to Ballers>";
$to = $email;
$subject = "Welcome to Ballers $fullName";
$text = "Welcome to Ballers. Lorem ipsum dolor sit amet consectetur adipisicing elit.";
$html = $text;
$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);

$crlf = "\n";

$mime = new Mail_mime($crlf);
$mime->setTXTBody($text);
$mime->setHTMLBody($html);

$body = $mime->get();
$headers = $mime->headers($headers);

$smtp = Mail::factory('smtp', array (
    'host' =>'localhost', 
    'auth' => true, 
    'username' => $username, 
    'password' => $password, 
    'port' => '25')
);
$mail = $smtp->send($to, $headers, $body);
      
if (PEAR::isError($mail)){
    echo("<p>Not sent" . $mail->getMessage() . "</p>");
}
else {
    echo("<p>Message successfully sent!</p>");
    // header("Location: http://ballers.ng/");
}