CREATE DATABASE IF NOT EXISTS movies_booking;

USE movies_booking;

CREATE TABLE IF NOT EXISTS movies (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS screening_times (
    id INT PRIMARY KEY AUTO_INCREMENT,
    movie_id INT,
    time DATETIME NOT NULL,
    seats_available INT NOT NULL,
    booked_seats VARCHAR(255) DEFAULT '',
    FOREIGN KEY (movie_id) REFERENCES movies(id)
);

CREATE TABLE IF NOT EXISTS bookings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    screening_id INT,
    customer_name VARCHAR(255) NOT NULL,
    customer_email VARCHAR(255) NOT NULL,
    customer_phone VARCHAR(20) NOT NULL,
    selected_seats VARCHAR(255) NOT NULL,
    FOREIGN KEY (screening_id) REFERENCES screening_times(id)
);
