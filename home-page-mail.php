<?php

$name = $_GET['name'] ?? 'Unknown';
$city = $_GET['city'] ?? 'Not provided';
$postcode = $_GET['postcode'] ?? 'Not provided';
$phone = $_GET['phone'] ?? 'Not provided';
$email = $_GET['email'] ?? 'Not provided';
$message = $_GET['message'] ?? 'No message provided';

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://zeptomail.zoho.com/v1.1/email",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
        "from" => ["address" => "noreply@resolute-dynamics.com"],
        "to" => [
            [
                "email_address" => [
                    "address" => "karthickk1996@hotmail.com",
                    "name" => "Karthick"
                ]
            ]
        ],
        "subject" => "Get in touch - " . $name,
        "htmlbody" => "<html>
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
                    </html>",
    ]),
    CURLOPT_HTTPHEADER => [
        "accept: application/json",
        "authorization: Zoho-enczapikey PHtE6r1YRei+g2V6p0MFtqTuFJL2MN4qq+sxLwEUtowWDKACG00E/dp/l2Wwr0orUfBDRaSanYxu5L+btenUdG/lPT5NDmqyqK3sx/VYSPOZsbq6x00etFUdcEzVUYXtcN9p1yDSst/eNA==",
        "cache-control: no-cache",
        "content-type: application/json",
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    echo "Email sent successfully.";
} else {
    echo "Email could not be sent.";
}
