<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql)) {
    echo "Feedback submitted successfully.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
