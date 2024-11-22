CREATE DATABASE IF NOT EXISTS rental_apartment;
USE rental_apartment;

CREATE TABLE IF NOT EXISTS apartments (
apartmentt_id INT AUTO_INCREMENT PRIMARY KEY, 
    apartment_type VARCHAR(100) NOT NULL, 
    rent DECIMAL(10, 2) NOT NULL, 
    location VARCHAR(255) NOT NULL, 
    description TEXT, 
    image_url VARCHAR(255), 
    available BOOLEAN DEFAULT TRUE, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO apartments (apartment_type, rent, location, description, image_url)
VALUES
    ('2 Bedroom', 20000, 'Nairobi', 'A spacious 2 bedroom apartment with modern amenities.', 'path/to/2_bedroom_image.jpg'),
    ('3 Bedroom', 25000, 'Nairobi', 'A luxurious 3 bedroom apartment with a view.', 'path/to/3_bedroom_image.jpg'),
    ('Studio', 11000, 'Nairobi', 'Cozy studio apartment perfect for singles.', 'path/to/studio_image.jpg'),
    ('1 Bedroom', 12000, 'Nairobi', 'Spacious one-bedroom units with modern amenities, including a fully-equipped kitchen and a balcony with a beautiful view.', 'path/to/1_bedroom_image,jpg'),
    ('Bedsitter', 9000, 'Nairobi', 'Spacious bedsitter fully-equipped with a bathoom, kitchen and a balcony with a beautiful view.','path/to/bedsitter_image.jpg');

CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY, 
    username VARCHAR(50) NOT NULL UNIQUE, 
    password_hash VARCHAR(255) NOT NULL, 
    email VARCHAR(100) NOT NULL, 
    full_name VARCHAR(100), 
    phone_number VARCHAR(15), 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS inquiries (
    inquiry_id INT AUTO_INCREMENT PRIMARY KEY, 
    user_id INT NOT NULL, 
    apartment_id INT NOT NULL, 
    inquiry_message TEXT, 
    inquiry_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (apartment_id) REFERENCES apartments(apartment_id)
);

CREATE TABLE IF NOT EXISTS payments (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    apartment_id INT NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    payment_method VARCHAR(50),  
    payment_status VARCHAR(50),  
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (apartment_id) REFERENCES apartments(apartment_id)
);