<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Feedback Form</title>
</head>
<body>
    <h2>Submit Feedback</h2>
    <form method="post" action="submit.php">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <textarea name="message" placeholder="Your feedback" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
