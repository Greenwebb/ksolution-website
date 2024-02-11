<?php
require "../../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

extract($_POST);

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "chinviajoshua51@gmail.com";
$mail->Password = "rgqjiobmxnrzoxzn";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;
$mail->SMTPSecure = "ssl";


//$mail->addAttachment("../zip/allzip.zip", $nrc . ".zip");


//email settings
$mail->isHTML(true);
$mail->setFrom($email, $fname);
$mail->addAddress("georgemunganga@gmail.com");
$mail->Subject = "K solutions Contact Page" . " " . $inquiry_type;
$mail->Body = "<html><body><h1>$inquiry_type</h1> <br><p1>$messages</p1> </body></html>";


if ($mail->send()) {
    
                    echo "Success!";
} else {
    echo "somthing went wrong " . $mail->ErrorInfo;

}