<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 bedroom apartments</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="apartment-details">
        <h3>2 Bedroom Apartment</h3>
                        <div class="apartment-images">
                            <img src="img/liv 2.jpg" alt="2 Bedroom Apartment - Living Room">
                            <img src="img/bd 2.jpg" alt="2 Bedroom Apartment - Bedroom">
                            <img src="img/kit 2.jpg" alt="2 Bedroom Apartment - Kitchen">
                        </div>
            <p>Spacious two-bedroom units with modern amenities, including a fully-equipped kitchen, air conditioning, and a balcony with a beautiful view.</p>
                        <form action="pay.php" method="POST">
                        <input type="hidden" name="apartment" value="2 Bedroom Apartment">
                        <input type="hidden" name="amount" value="20000"> 
                        <label for="phoneNumber">Phone Number:</label><br>
                        <input type="text" name="phoneNumber" required><br><br>
                        <button type="submit">Pay Now</button><br>
            <a href="apartments.php">Back to Apartments</a>
        </section>
    </main>
    