<?php

//server inbuilt PEAR Mail class code gotten from https://www.qservers.net/process/knowledgebase.php?action=displayarticle&id=52
require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge

require('logindetails.php');

$from = "no-reply@ballers.ng";
$to = "blissville@highrachy.com";
$cc = "nnamdi@highrachy.com";
$subject = "New Baller Alert";
$headers = array (
    'From' => $from,
    'To' => $to,
    'Subject' => $subject,
    'Cc' => $cc
);
$text = $message;
$html = $message;
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
    echo('<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Something went wrong. Please try again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
        // echo $mail->getMessage();
} else {
    echo('<div class="alert alert-success alert-dismissible fade show" role="alert">
            That was successful. We will be in touch.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
    // header("Location: http://ballers.ng/");
}

