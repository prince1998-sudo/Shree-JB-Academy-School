<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Updates - Shree JB Academy</title>
    <link rel="stylesheet" href="news.css">
</head>
<body>
    <header>
        <h1>📢 School News & Updates</h1>
    </header>

    <div class="container">
        <?php
        // Database connection
        $conn = new mysqli("localhost", "root", "", "school");

        // Check for connection errors
        if ($conn->connect_error) {
            die("<p class='error'>Connection failed: " . $conn->connect_error . "</p>");
        }

        // Fetch news from database (latest first)
        $sql = "SELECT * FROM news ORDER BY date DESC";
        $result = $conn->query($sql);

        // Check if news is available
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='news-item'>";
                echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
                echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
                echo "<small>📅 Published on: " . date("F j, Y", strtotime($row['date'])) . "</small>";
                echo "</div>";
            }
        } else {
            echo "<p class='no-news'>No news updates available at the moment.</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
