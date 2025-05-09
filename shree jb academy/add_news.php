<?php
$conn = new mysqli("localhost", "root", "", "school");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO news (title, content, date) VALUES ('$title', '$content', NOW())";
    if ($conn->query($sql) === TRUE) {
        echo "News added successfully!";
    }
}
?>
<form method="POST">
    <input type="text" name="title" placeholder="News Title" required>
    <textarea name="content" placeholder="News Content" required></textarea>
    <button type="submit">Add News</button>
</form>
