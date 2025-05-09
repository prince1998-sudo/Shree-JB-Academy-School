<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $dob = $_POST['dob'];
    $parent = $_POST['parent'];
    $address = $_POST['address'];
    
    $uploadDir = "uploads/";
    $filePath = $uploadDir . basename($_FILES["documents"]["name"]);
    move_uploaded_file($_FILES["documents"]["tmp_name"], $filePath);

    // Database connection
    $conn = new mysqli("localhost", "root", "", "school");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO admissions (name, email, phone, class, dob, parent, address, documents) 
            VALUES ('$name', '$email', '$phone', '$class', '$dob', '$parent', '$address', '$filePath')";

    if ($conn->query($sql) === TRUE) {
        echo "Application submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
