<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST["name"];
    $email = $_POST["email"];
    $institution = $_POST["institution"];
    $use = $_POST["use"];
    $github = $_POST["github"];

    // Build the email message
    $to = "jiaoyf.thu@gmail.com"; // Replace with your email address
    $subject = "SPHSOL Access Request";
    $message = "Name: $name\n\nEmail: $email\n\nInstitution: $institution\n\nIntended use of SPHSOL: $use\n\nGitHub username: $github\n";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "CC: $email\r\n"; // Optional: send a copy of the email to the sender

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Your email was sent successfully!</p>";
    } else {
        echo "<p>There was an error sending your email. Please try again later.</p>";
    }
}
?>
