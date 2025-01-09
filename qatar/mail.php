<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

// if (isset($_GET['submit'])) {
        
        // echo $_GET['email'];
        
     
    $name=$_GET['name'];
    $email=$_GET['email'];
    $phone=$_GET['phone'];
  
    $message=$_GET['message'];
    $to='resolutedynamics07@gmail.com';
    $fromemail = $email;
// }

//From email address and name
$mail->From = "resolutedynamics07@gmail.com";
$mail->FromName = "resolute";

//To address and name
$mail->addAddress("resolutedynamics07@gmail.com", "resolute");
$mail->addAddress("resolutedynamics07@gmail.com"); //Recipient name is optional

//Address to which recipient will reply
// $mail->addReplyTo("reply@yourdomain.com", "Reply");

//CC and BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email

$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";



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
$mail->Username = 'resolutedynamics07@gmail.com';
$mail->Password = 'wukipkrhnwzzbume';

$mail->isHTML(true);

$mail->Subject = "Contact Us - ".$name;
$mail->Body = "<html>
                          <head>
                            <title>360 Freight</title>
                          </head>
                          <body>
                                <table>
                                <tr><td> Name</td><td>:</td><td>".$name."</td></tr>
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
     header('Location: thanks.html');
    // echo "Message has been sent successfully";
} catch (Exception $e) {
    header('Location: thanks.html');
    //echo "Mailer Error: " . $mail->ErrorInfo;
}