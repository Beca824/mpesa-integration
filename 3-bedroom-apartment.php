
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 Bedroom Apartment</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <main>
        <section class="apartment-details">
            <h3>3 Bedroom Apartment</h3>
                <div class="apartment-images">
                    <img src="img/liv 1.jpg" alt="3 Bedroom Apartment - Living Room">
                    <img src="img/bd 1.jpg" alt="3 Bedroom Apartment - Bedroom">
                    <img src="img/kit 1.jpg" alt="3 Bedroom Apartment - Kitchen">
                </div>
            <p>Perfect for families, our three-bedroom apartments feature large living spaces, multiple bathrooms, and access to exclusive facilities.</p>
            <form action="pay.php" method="POST">
                <input type="hidden" name="apartment" value="3 Bedroom Apartment">
                <input type="hidden" name="amount" value="25000"> 
                <label for="phoneNumber">Phone Number:</label><br>
                <input type="text" name="phoneNumber" required><br><br>
                <button type="submit">Pay Now</button><br>
            </form>
            <a href="apartments.php">Back to Apartments</a>
        </section>
    </main>
</body>
</html>
