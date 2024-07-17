# SMP
PHP Assessment 
# Project 
The Secure Member Portal is a web application designed to provide a secure environment where users can register, log in, update their profiles, change passwords, and view public holidays. It incorporates PHP for server-side logic, MySQL for database management, session handling for user authentication, and an external API for fetching public holiday data.

This project is useful for demonstrating skills in PHP, database management with MySQL, session handling, API consumption, and implementing basic security measures. It provides a practical example of how to create a secure member portal with essential functionalities typically required in web applications.

# Technologies Used
PHP 7.2+
MySQL / MariaDB
HTML, CSS, JavaScript
XAMPP (for local development)
Visual Studio Code (IDE)

# secure-member-portal/
│
├── header.php
├── footer.php
├── conn.php
├── index.php
├── welcome.php
├── login.php
├── protected-home.php
├── profile.php
├── account.php
└── holiday.php

# Database Setup
Start XAMPP and ensure Apache and MySQL are running.
Import setup_database.sql into MySQL/phpMyAdmin to create the secure_member_portal database and tbl_users table.

# Configure API Endpoint
Update the API endpoint URL in holiday.php to fetch public holiday data.

# Start the Application
Open a web browser and navigate to (http://localhost/project%20asses/).

# Register/Login
Register a new account or log in with existing credentials.

# Navigate Protected Areas
Explore protected-home.php to update profile, change password, view public holidays, and logout.
