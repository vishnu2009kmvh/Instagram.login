<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "vishnu2009kmvh@gmail.com";   // 🔴 replace with your email
    $subject = "New Project Form Submission";

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    $headers = "From: noreply@yourproject.com\r\n";
    $headers .= "Reply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully ✅";
    } else {
        echo "Email sending failed ❌";
    }
}
?>
