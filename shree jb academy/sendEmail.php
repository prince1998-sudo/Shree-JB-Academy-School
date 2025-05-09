<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "puskarbadi860@gmail.com";
    $subject = "New Contact Us Form Submission";
    $headers = "From: " . $email;
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Sending email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed!";
    }
}
?>
