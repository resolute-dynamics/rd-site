<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendors/autoload.php";

$mail = new PHPMailer(true); // Enable exceptions for better debugging
$mail->isSMTP();             // Must be called early
$mail->Host = "smtp.zeptomail.in";
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->Username = "emailapikey";
$mail->Password = "PHtE6r1YRei+g2V6p0MFtqTuFJL2MN4qq+sxLwEUtowWDKACG00E/dp/l2Wwr0orUfBDRaSanYxu5L+btenUdG/lPT5NDmqyqK3sx/VYSPOZsbq6x00etFUdcEzVUYXtcN9p1yDSst/eNA==";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Correct encryption method
$mail->Encoding = "base64";
$mail->CharSet = "UTF-8";

$mail->setFrom("noreply@resolute-dynamics.com", "Resolute Dynamics");
$mail->addAddress("karthickk1996@hotmail.com");

$name = $_GET['name'] ?? 'Unknown';
$city = $_GET['city'] ?? 'Not provided';
$postcode = $_GET['postcode'] ?? 'Not provided';
$phone = $_GET['phone'] ?? 'Not provided';
$email = $_GET['email'] ?? 'Not provided';
$message = $_GET['message'] ?? 'No message';

$mail->isHTML(true);
$mail->Subject = "Get in touch - " . htmlspecialchars($name);

$mail->Body = "
<html>
  <head><title>Get in touch - Home page</title></head>
  <body>
    <h3>Enquiry From " . htmlspecialchars($name) . "</h3>
    <table>
      <tr><td>Name</td><td>:</td><td>" . htmlspecialchars($name) . "</td></tr>
      <tr><td>City</td><td>:</td><td>" . htmlspecialchars($city) . "</td></tr>
      <tr><td>Postcode</td><td>:</td><td>" . htmlspecialchars($postcode) . "</td></tr>
      <tr><td>Phone Number</td><td>:</td><td>" . htmlspecialchars($phone) . "</td></tr>
      <tr><td>Email</td><td>:</td><td>" . htmlspecialchars($email) . "</td></tr>
      <tr><td>Message</td><td>:</td><td>" . nl2br(htmlspecialchars($message)) . "</td></tr>
    </table>
  </body>
</html>";

$mail->AltBody = "Enquiry from: $name\nCity: $city\nPostcode: $postcode\nPhone: $phone\nEmail: $email\nMessage:\n$message";

try {
    $mail->send();
    echo "Email sent successfully.";
} catch (Exception $e) {
    echo "Email could not be sent. Error: " . $mail->ErrorInfo;
}
