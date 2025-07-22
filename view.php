<?php
include 'db.php';

$result = $conn->query("SELECT * FROM feedback");

echo "<h2>Feedback Received:</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<p><strong>{$row['name']} ({$row['email']}):</strong> {$row['message']}</p><hr>";
}
?>
