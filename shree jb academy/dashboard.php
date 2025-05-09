<?php
session_start();
if (!isset($_SESSION['student_email'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Shree JB Academy</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome, Student!</h1>
    </header>
    <div class="container">
        <p>Here you can check your grades, timetable, and announcements.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
