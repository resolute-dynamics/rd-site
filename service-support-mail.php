<?php

$name = $_REQUEST['name'] ?? 'Unknown';
$email = $_REQUEST['email'] ?? 'Not provided';
$phone = $_REQUEST['phone'] ?? 'Not provided';
$subject = $_REQUEST['subject'] ?? 'No subject provided';
$message = $_REQUEST['message'] ?? 'No message provided';

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.zeptomail.in/v1.1/email",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
        "from" => ["address" => "noreply@resolute-dynamics.com"],
        "to" => [
            [
                "email_address" => [
                    "address" => "resolutedynamics07@gmail.com",
                    "name" => "Resolute Dynamics"
                ]
            ]
        ],
        "subject" => "Sales Contact - " . $name,
        "htmlbody" => "<html>
                        <head><title>Sales Contact - Contact page</title></head>
                        <body>
                            <h3>Enquiry From " . htmlspecialchars($name) . "</h3>
                            <table>
                                <tr><td>Name</td><td>:</td><td>" . htmlspecialchars($name) . "</td></tr>
                                <tr><td>Email</td><td>:</td><td>" . htmlspecialchars($email) . "</td></tr>
                                <tr><td>Phone Number</td><td>:</td><td>" . htmlspecialchars($phone) . "</td></tr>
                                <tr><td>Subject</td><td>:</td><td>" . htmlspecialchars($subject) . "</td></tr>
                                <tr><td>Message</td><td>:</td><td>" . nl2br(htmlspecialchars($message)) . "</td></tr>
                            </table>
                        </body>
                    </html>",
    ]),
    CURLOPT_HTTPHEADER => [
        "accept: application/json",
        "authorization: Zoho-enczapikey PHtE6r0LQ7u/2WQvoBhRsP7qEJX2NNwmrOw0LwZE49xKDf9RTk0Ho9x/wTfl/kooUPUTR6SSyINrsL+f5eyCLWy4PT1JVWqyqK3sx/VYSPOZsbq6x00fsVwSdEHUVIPse9Jv0yTWuNrZNA==",
        "cache-control: no-cache",
        "content-type: application/json",
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

if ($err) {
    return true;
} else {
    return true;
}
