<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendors/autoload.php";

//PHPMailer Object
$mail = new PHPMailer();
$name=$_REQUEST['name'] ?? '';
$email=$_REQUEST['email'] ?? '';
$phone=$_REQUEST['phone'] ?? '';
$subject=$_REQUEST['subject'] ?? '';
   
$message=$_REQUEST['message'] ?? '';

//From email address and name
$mail->From = "noreply@resolute-dynamics.com";
$mail->FromName = "Resolute Dynamics";

//To address and name
$mail->addAddress("resolutedynamics07@gmail.com", "Resolute Dynamics");

$mail->IsSMTP();
$mail->Host = "smtp.zeptomail.in";



//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission 465 ssl
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

$mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );

// optional
// used only when SMTP requires authentication  
$mail->SMTPAuth = true;
$mail->Username = 'emailapikey';
$mail->Password = 'PHtE6r1YRei+g2V6p0MFtqTuFJL2MN4qq+sxLwEUtowWDKACG00E/dp/l2Wwr0orUfBDRaSanYxu5L+btenUdG/lPT5NDmqyqK3sx/VYSPOZsbq6x00etFUdcEzVUYXtcN9p1yDSst/eNA==';

$mail->Subject = "Get in touch - ".$name;
$mail->Body = "<html>
                          <head>
                                <title> Get in touch - Home page </title>
                          </head>
                          <body>
                                <h3>  Enquiry From " . ($_GET['name'] ?? '') . "</h3>
                                <table>
                                
                                <tr><td> Name</td><td>:</td><td>".$name."</td></tr>
                                <tr><td> city </td><td>:</td><td>".$city."</td></tr>
                                <tr><td> city </td><td>:</td><td>".$postcode."</td></tr>
                                <tr><td> Phone Number </td><td>:</td><td>".$phone."</td></tr>
                                 <tr><td> Email </td><td>:</td><td>".$email."</td></tr>
                                 <tr><td> Message</td><td>:</td><td>".$message."</td></tr>
                                </table>
                                <div style='width:100%; text-align:justify; font-size:10px; line-height:12px; color:#111' >
                                
                                </div>
                          </body>
                        </html>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo true;
   // header('Location: thanks.php');
   // echo "Message has been sent successfully";
} catch (Exception $e) {
    echo true;
   // header('Location: thanks.php');
   // echo "Mailer Error: " . $mail->ErrorInfo;
}
