<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "puskarbadi860@gmail.com";
    $subject = "Admission Enquiry Form Submission";

    // Collect form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $citizenship = $_POST['citizenship'];
    $gender = $_POST['gender'];
    $schoolName = $_POST['schoolName'];
    $parentFirstName = $_POST['parentFirstName'];
    $parentLastName = $_POST['parentLastName'];

    // Combine form data into a message
    $message = "Student Details:\n\n";
    $message .= "First Name: $firstName\n";
    $message .= "Last Name: $lastName\n";
    $message .= "Date of Birth: $dob\n";
    $message .= "Citizenship: $citizenship\n";
    $message .= "Gender: $gender\n";
    $message .= "Current School: $schoolName\n\n";
    $message .= "Parent's Name: $parentFirstName $parentLastName\n";

    // Headers (optional)
    $headers = "From: webmaster@yourdomain.com" . "\r\n" .
               "Reply-To: $to" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Form submitted successfully!";
    } else {
        echo "There was an error sending the form.";
    }
}
?>
