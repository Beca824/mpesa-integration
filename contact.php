<?php
// Process the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Database connection
    $conn = new mysqli('localhost', 'username', 'password', 'database');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        $successMessage = "Message sent successfully!";
    } else {
        $errorMessage = "Error: " . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="apartments.php">Apartments</a>
        <a href="signin.php">Sign In</a>
    </nav>
    <h1>Contact Us</h1>

    <?php if (!empty($successMessage)): ?>
        <p class="success"><?php echo $successMessage; ?></p>
    <?php elseif (!empty($errorMessage)): ?>
        <p class="error"><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <form action="contact.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Submit</button>
    </form>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <h3>About</h3>
                <p>We Turn Dreams Into Reality</p>
                <p> Kapedo Apartments is dedicated to providing comfortable, modern living spaces that meet the highest standards of quality and convenience.</p>
        
            </div>
            
            <div class="footer-middle">
                <h3>Contact</h3>
                <p>Our office</p>
                <p>Kilimani, Nairobi</p>
                <p>Mon - Fri: 9am - 5pm</p>
                <p>Sat: 9am - 1pm</p>
                <p>+254 712 81 44 16</p>
                <p>info@kapedo.co.ke</p>
                <a href="http://www.kapedo.co.ke">www.kapedo.co.ke</a>
            </div>
            
            <div class="footer-right">
                <h3>Most Viewed Apartment</h3>
                <div class="property">
                    <img src="img/liv 2.jpg" alt="2-bedroom-apartment">
                    <p>2 bedroom apartment</p>
                    <p>KSH. 20,000</p>
                    <a href="apartments.php">Other Properties</a>
                </div>
            </div>

            <div class="footer-feedback">
                <h3>Feedback</h3>
                <form action="submit_feedback.php" method="POST">
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="E-mail" required>
                    <input type="tel" name="phone" placeholder="Phone Number" required>
                    <textarea name="message" placeholder="Message for Us" required></textarea>
                    <button type="submit">Send Feedback</button>
                </form>
            </div>
        </div>
    </footer>
</body>
</html>
