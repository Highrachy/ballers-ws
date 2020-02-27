<?php

//server inbuilt PEAR Mail class code gotten from https://www.qservers.net/process/knowledgebase.php?action=displayarticle&id=52
include('Mail.php'); // PEAR Mail package

require('logindetails.php');

$from = "no-reply@ballers.ng <Welcome to Ballers>";
$to = $email;
$subject = "Welcome to Ballers $fullName";
$body = "Welcome to Ballers. Lorem ipsum dolor sit amet consectetur adipisicing elit.";
$headers = array (
    'From' => $from,
    'To' => $to,
    'Subject' => $subject,
    'Reply-To' => $email
);

$smtp = Mail::factory('smtp', array (
    'host' =>'localhost', 
    'auth' => true, 
    'username' => $username, 
    'password' => $password, 
    'port' => '25')
);
$mail = $smtp->send($to, $headers, $body);
      
if (PEAR::isError($mail)){
    echo('<div class="alert alert-danger" role="alert">'
            .$mail->getMessage().
        '</div>');
} else {
    echo('<div class="alert alert-success" role="alert">
            Message successfully sent!
        </div>');
    // header("Location: http://ballers.ng/");
}

