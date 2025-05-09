<?php
session_start();
$conn = new mysqli("localhost", "root", "", "school");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM students WHERE email='$email' AND password='$password'");

    if ($result->num_rows > 0) {
        $_SESSION['student_email'] = $email;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login credentials.";
    }
}
?>
