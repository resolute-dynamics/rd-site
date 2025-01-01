<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "./vendors/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

// if (isset($_GET['submit'])) {
        
        // echo $_GET['name'];
        // exit();
        
     
    $name=$_REQUEST['name'] ?? '';
    $city=$_REQUEST['city'] ?? '';
    $postcode=$_REQUEST['postcode'] ?? '';
    $phone=$_REQUEST['phone'] ?? '';
    $email=$_REQUEST['email'] ?? '';
    $message=$_REQUEST['message'] ?? '';
    
    $to='resolutedynamics07@gmail.com';
    $fromemail = $email;
// }

//From email address and name
$mail->From = "resolutedynamics07@gmail.com";
$mail->FromName = "Resolute Dynamics";

//To address and name
$mail->addAddress("resolutedynamics07@gmail.com", "Resolute Dynamics");
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
// $mail->SMTPSecure = 'ssl';
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
//$mail->Username = 'vaisakh.globosoft@gmail.com';
//$mail->Password = 'xupqlxmfykujdgxb';
 $mail->Password = 'wukipkrhnwzzbume';
// $mail->Password = 'wxjqknzvmvmbakbj';

$mail->isHTML(true);

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