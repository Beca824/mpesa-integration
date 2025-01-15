<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($username) && !empty($password)) {
        // Secure the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'web.sql');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert into the database
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param('ss', $username, $hashed_password);

        if ($stmt->execute()) {
            // Redirect to the dashboard
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "<p style='color: red;'>Please fill in all fields.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="apartments.php">Apartments</a>
        <a href="login.php">Login</a>
        
    </nav>
    
    <div class="cover_box">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have an account? <a href="register.php">Register</a>
                </div>
            </form>
        </div>
    </div>
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