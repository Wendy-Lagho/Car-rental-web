<?php
$host = "localhost";
$dbname = "car_rental";
$username = "root";
$password = "";

// establish a database connection
$conn = new mysqli($host, $username, $password, $dbname);

// check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";

// close the connection
$conn->close();

