# Web Technology Practice — User Authentication System

A simple user registration and login system built with PHP and MySQL as part of Web Technology practice.

## Features

* User registration
* User login
* Password hashing
* Session-based authentication
* Protected dashboard
* User logout
* Duplicate email handling
* Basic form styling

## Technologies Used

* HTML
* CSS
* PHP
* MySQL
* XAMPP

## Project Structure

```text
php-user-authentication-system/
│
├── dashboard.php
├── db.php
├── login.php
├── logout.php
├── register.php
├── style.css
├── users.sql
└── README.md
```

## Database

The project uses a MySQL database named:

```text
user_system
```

It contains a `users` table with the following fields:

* `id`
* `name`
* `email`
* `password`

The database structure is provided in `users.sql`.

## How to Run

### 1. Install XAMPP

Install XAMPP with Apache and MySQL.

### 2. Copy the Project

Place the project inside:

```text
C:\xampp\htdocs\
```

The folder should be:

```text
C:\xampp\htdocs\php-user-authentication-system
```

### 3. Start XAMPP

Start:

* Apache
* MySQL

### 4. Import the Database

Open phpMyAdmin:

```text
http://localhost/phpmyadmin
```

Import the `users.sql` file.

### 5. Check Database Connection

Make sure the database settings in `db.php` match your local MySQL configuration.

### 6. Open the Project

Go to:

```text
http://localhost/php-user-authentication-system/register.php
```

Register a new account and then log in.

## Authentication Flow

```text
Register
   ↓
Save user in MySQL
   ↓
Login
   ↓
Verify password
   ↓
Dashboard
   ↓
Logout
```

## Purpose

This project was created for practicing basic web development concepts, including PHP, MySQL, forms, sessions, authentication, and CSS.

## Future Improvements

* Form validation
* Password reset
* User profile management
* Improved error messages
* Better responsive design
