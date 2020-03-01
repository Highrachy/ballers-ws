<?php
//server inbuilt PEAR Mail class code gotten from https://www.qservers.net/process/knowledgebase.php?action=displayarticle&id=52
require_once "Mail.php"; // PEAR Mail package
require_once ('Mail/mime.php'); // PEAR Mail_Mime packge

require_once('config.php');
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $full_name = $_POST['full_name']; // form field
    $email = $_POST['email']; // form field
    $phone = $_POST['phone']; // form field

    $from = "no-reply@ballers.ng"; //enter your email address
    $to = "haruna@highrachy.com"; //enter the email address of the contact your sending to
    $cc = "harunpopson@gmail.com";
    $subject = "[Ballers Landing Page] Interested in joining Ballers"; // subject of your email

    $headers = array ('From' => $from,'To' => $to, 'Subject' => $subject);

    $text = "Fullname: $full_name \nEmail: $email \nPhone: $phone";; // text versions of email.
    $html = "<html><body>Full Name: $full_name <br> Email: $email <br>Phone: $phone <br></body></html>"; // html versions of email.

    // save contacts in db
    save_contacts_in_db($full_name, $email, $phone);

    if ($is_local_environment) {
        // show the sent email on local
        echo $html;
    } else {
        $crlf = "\n";

        $mime = new Mail_mime($crlf);
        $mime->setTXTBody($text);
        $mime->setHTMLBody($html);

        //do not ever try to call these lines in reverse order
        $body = $mime->get();
        $headers = $mime->headers($headers);

        $host = "localhost"; // all scripts must use localhost
        $username = SMTP_EMAIL; //  your email address (same as webmail username)
        $password = SMTP_PASSWORD; // your password (same as webmail password)

        $smtp = Mail::factory('smtp', array ('host' => $host, 'auth' => true,
        'username' => $username,'password' => $password));
        $mail = $smtp->send($to, $headers, $body);
        if (PEAR::isError($mail)) {
            echo('<div class="alert alert-danger" role="alert">'. $mail->getMessage() .'</div>');
        }
        else {
        echo('<div class="alert alert-success" role="alert">Message has been successfully sent.</div>');
        }
    }

    $_POST = array();
  }
