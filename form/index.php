<form action="" method="POST">
    <input type="text" name="fullname" placeholder="Fullname">
    <input type="email" name="email" placeholder="Email Address">
    <button type="submit" name="submit">Submit</button>
</form>

<?php
//db connection
$dbHost = "localhost";
$dbName = "ballers_new";
$dbUser = "root";
$dbPass = "";
$mysqli = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$mysqli) {
    echo "Error: Unable to connect to db" . PHP_EOL;
    exit;
} else {
    echo "Connected to ".$dbName."<br>";
}

//mailjet
require 'vendor/autoload.php';
use \Mailjet\Resources;
$mj = new \Mailjet\Client('28af3619d3d5333c3ba63690b5baeac4','aa70b69fb4bc6f55e1fa1a3cddf7d5bd',true,['version' => 'v3.1']);


if((isset($_POST['fullname'])&& $_POST['fullname'] !='') && (isset($_POST['email'])&& $_POST['email'] !='')) {

    $fullName = $mysqli->real_escape_string($_POST['fullname']);
    $email = $mysqli->real_escape_string($_POST['email']);

    $sqlQuery = "INSERT INTO `visitors`(`fullName`, `email`) VALUES ('$fullName','$email')";

    if(!$mysqli->query($sqlQuery)){
        die("An error occured ".$mysqli->error);
    } else {
        $body = [
            'Messages' => [
              [
                'From' => [
                  'Email' => "samuel@highrachy.com",
                  'Name' => "Highrachy no-reply"
                ],
                'To' => [
                  [
                    'Email' => $email,
                    'Name' => $fullName
                  ]
                ],
                'Subject' => "Welcome to Highrachy.",
                'TextPart' => "My first Mailjet email",
                'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
                'CustomID' => "AppGettingStartedTest"
              ]
            ]
        ];
        //   echo $body;
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success() && var_dump($response->getData());
    }
    
}


?>