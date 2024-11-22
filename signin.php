<?php
// Process sign-in form
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'username', 'password', 'database');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        $successMessage = "Sign-in successful!";
    } else {
        $errorMessage = "Invalid username or password.";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
    <h1>Sign In</h1>

    <?php if (!empty($successMessage)): ?>
        <p class="success"><?php echo $successMessage; ?></p>
    <?php elseif (!empty($errorMessage)): ?>
        <p class="error"><?php echo $errorMessage; ?></p>
    <?php endif; ?>

    <form action="signin.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Sign In</button>
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
