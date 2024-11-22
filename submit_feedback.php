<?php
// Initialize a variable to hold the thank you message
$thankYouMessage = "";

// Define your email address
$yourEmail = "beckyafyai@gmail.com";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and capture user input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Option 1: Save feedback to a file (Optional)
    $file = fopen("feedback.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nFeedback: $feedback\n\n");
    fclose($file);

    // Option 2: Send feedback via email
    $subject = "User Feedback from $name";
    $message = "You have received feedback from the following user:\n\n";
    $message .= "Name: $name\nEmail: $email\n\n";
    $message .= "Feedback:\n$feedback\n";

    // Send the email
    mail($yourEmail, $subject, $message);

    // Display the thank you message
    $thankYouMessage = "<h2>Thank you for your feedback! 😊</h2><p>We appreciate you taking the time to share your thoughts with us. Your feedback helps us improve.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>
    <?php
    // If the thank you message is set, display it
    if ($thankYouMessage != "") {
        echo $thankYouMessage;
    } else {
    ?>
        <h2>Feedback Form</h2>
        <form method="POST" action="feedback.php">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="feedback">Feedback:</label><br>
            <textarea id="feedback" name="feedback" rows="4" required></textarea><br><br>

            <input type="submit" value="Submit Feedback">
        </form>
    <?php
    }
    ?>
</body>
</html>
