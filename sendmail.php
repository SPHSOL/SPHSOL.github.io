<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $institution = $_POST['institution'];
    $use = $_POST['use'];
    $github = $_POST['github'];

    // Set recipient email address
    $to = 'jiaoyf.thu@gmail.com';

    // Set email subject
    $subject = 'SPHSOL Access Request';

    // Build email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Institution: $institution\n";
    $body .= "Intended Use: $use\n";
    $body .= "GitHub Username: $github\n";

    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo '<p>Your request has been sent. Thank you!</p>';
    } else {
        echo '<p>There was an error sending your request. Please try again later.</p>';
    }
}
?>