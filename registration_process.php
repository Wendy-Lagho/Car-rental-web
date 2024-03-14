<?php
require_once "db_connect.php";

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
  global $conn; // Access $conn variable
  
    // Retrieve form data
    $_name = $_POST["name"];
    $_email = $_POST["email"];
    $_password = $_POST["password"];
    $_confirm_password = $_POST["confirm_password"];
    $_phone = $_POST["phone"];

    // Validate input data
    $errors = array();

    // Validate name (only letters and white spaces allowed)
    if (!preg_match("/^[a-zA-Z-' ]*$/", $_name)) {
        $errors["name"] = "Only letters and white space allowed";
    }

    // Validate email
    if (!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }

    // Validate password (must be at least 8 characters long and contain at least one number, one uppercase letter, one lowercase letter, and one special character)
    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/", $_password)) {
        $errors["password"] = "Password must be at least 8 characters long and contain at least one number, one uppercase letter, one lowercase letter, and one special character";
    }

    // Validate confirm password
    if ($_password != $_confirm_password) {
        $errors["confirm_password"] = "Passwords do not match";
    }

    // Validate phone number (must be 10 digits long)
    if (!preg_match("/^[0-9]{10}$/", $_phone)) {
        $errors["phone"] = "Phone number must be 10 digits long";
    }

    // Check if there are any validation errors
    if (!empty($errors)) {
        // Display errors
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        // Hash the password
        $hashed_password = password_hash($_password, PASSWORD_DEFAULT);

        // Prepare and execute SQL query to insert user data into the database
    $sql = "INSERT INTO users (name, email, password, phone) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
       // Check for errors in preparing the SQL statement
    die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
}

    $stmt->bind_param("ssss", $_name, $_email, $hashed_password, $_phone);

        if ($stmt->execute()) {
            // Registration successful, redirect to login page
            header("Location: login.php");
            exit();
        } else {
            // Registration failed, display error message
            echo "<p>Error: Registration failed. Please try again later.</p>";
        }

        // Close statement and database connection
        $stmt->close();
        $conn->close();
    }
} else {
    // Redirect back to the registration page if the form is not submitted
    header("Location: registration.php");
    exit();
}
?>
// Path: db_connect.php
// <?php
// // Database connection parameters
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "booking_system";
//