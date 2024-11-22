<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Kapedo Rental Apartment</title>
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
    
        
    </div>
    <h1>Kapedo Rental Apartment</h1>
    <h1>Welcome to Kapedo Rental Apartment</h1>
    
    <p>Find your perfect apartment here!</p>
    <p>Modern, comfortable apartments designed to fit your lifestyle. Choose from a variety of floor plans and enjoy top-notch amenities.</p>
    
   
    <main>
        <section class="about">
            <h2>Available Apartments</h2>
            
            <div class="apartment-list">
                <div class="apartment">
                    <a href="2-bedroom-apartment.php">
                    <h3>2 Bedroom Apartment</h3>
                    <form class="form" action="acton.php" method="POST"> 
                    <h3 class="card-title mb-3 text-primary">Ksh.20,000</h3>
                    <div class="apartment-images">
                            <img src="img/liv 2.jpg" alt="2 Bedroom Apartment - Living Room">
                            <img src="img/bd 2.jpg" alt="2 Bedroom Apartment - Bedroom">
                            <img src="img/kit 2.jpg" alt="2 Bedroom Apartment - Kitchen">
                            <p>Spacious two-bedroom units with modern amenities, including a fully-equipped kitchen, air conditioning, and a balcony with a beautiful view.</p>
                            

                        </div>
                    </form>
                        
                        
                    </a>
                </div>
                <div class="apartment">
                    <a href="3-bedroom-apartment.php">
                        <h3>3 Bedroom Apartment</h3>
                        <form class="form" action="action.php" method="POST">
                        <h3 class="card-title mb-3 text-primary">Ksh.25,000</h3>
                        <div class="apartment-images">
                            <img src="img/liv 1.jpg" alt="3 Bedroom Apartment - Living Room">
                            <img src="img/bd 1.jpg" alt="3 Bedroom Apartment - Bedroom">
                            <img src="img/kit 1.jpg" alt="3 Bedroom Apartment - Kitchen">
                        </div>
                        <p>Perfect for families, our three-bedroom apartments feature large living spaces, multiple bathrooms, and access to exclusive facilities.</p>
                        

                        </form>
                        
                    </a>
                </div>
                <div class="apartment">
                    <a href="studio-apartment.php">
                        <h3>Studio Apartment</h3>
                        <form class="form" action="acton.php" method="POST">
                            <h3 class="card-title mb-3 text-primary">Ksh.11,000</h3>
                            <div class="apartment-images">
                            <img src="img/liv 3.jpg" alt="Studio Apartment - Living Space">
                            <img src="img/kit 3.jpg" alt="Studio Apartment - Kitchen">
                            <img src="img/bat 1.jpg" alt="Studio Apartment - Bathroom">
                        </div>
                        <p>Ideal for singles, our studio apartments offer a cozy living space with all essentials, designed for efficient and stylish living.</p>
                       
                    </a>
                    </form>
                </div>
            </div>
                   
            <div class="apartment">
                <a href="1-bedroom-apartment.php">
                <h3>1 Bedroom Apartment</h3>
                <form class="form" action="action.php" method="POST">
                    <h3 class="card-title mb-3 text-primary">Ksh.12,000</h3>
                    <div class="apartment-images">
                            <img src="img/liv 4.jpg" alt="1 Bedroom Apartment - Living Room">
                            <img src="img/bd 3.jpg" alt="1 Bedroom Apartment - Bedroom">
                            <img src="img/kit 4.jpg" alt="1 Bedroom Apartment - Kitchen">
                        </div>
            <p>Spacious one-bedroom units with modern amenities, including a fully-equipped kitchen and a balcony with a beautiful view.</p>
                </form>                       
                </a>
            </div>
                   <div class="apartment">
                   <a href="bedsitter-apartment.php">
                   <h3>Bedsitter Apartment</h3>
                   <form class="form" action="acton.php" method="POST">
                            <h3 class="card-title mb-3 text-primary">Ksh.9,000</h3>
                        <div class="apartment-images">
                        <img src="img/bath.jpg" alt="Bedsitter Apartment - Bathroom">
                            <img src="img/bed.jpg" alt="Bedsitter Apartment - Bedroom">
                            <img src="img/kit 4.jpg" alt="Bedsitter Apartment - Kitchen">
                        </div>
            <p>Spacious bedsitter fully-equipped with a bathoom, kitchen and a balcony with a beautiful view.</p>
            </form>
            </a>
                   </div>     
            
        </section>
    </main>
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
