<?php
// Database configuration
$host = "localhost"; // Replace with your host name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "kantor"; // Replace with your database name

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
// if ($conn->connect_error) {
    // die("Connection failed: " . $conn->connect_error);
//}

// Connection successful
// echo "Connected to the database successfully.";

// Close the database connection
// $conn->close();
