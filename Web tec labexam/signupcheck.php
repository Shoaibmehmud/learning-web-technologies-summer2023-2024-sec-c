<?php
session_start();
include('userModel.php');
 
$con = getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted using POST

    // Retrieve user input from the form
    $username = $_POST["username"];
    $password = $_POST["Password"];
  //  $email = $_POST["Email"];
    $user_type = $_POST['User_type'];

    // Validate the input (e.g., check for empty fields, validate email format, etc.)
    $confirmPassword = $_POST["confirmPassword"];

    if ($password === $confirmPassword) {
        // Passwords match, continue with registration process
        echo "Registration successful!";
    } else {
        // Passwords do not match, display an error message
        echo "Passwords do not match. Please try again.";
    }
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Construct an SQL INSERT query
    $sql = "INSERT INTO user (username, Password, User_type) VALUES ('$username', '$password', '$user_type')";

    if ($con->query($sql) === TRUE) {
        header('location: login.php');
    } else {
        echo "Error: " . $con->error;
    }

    // Close the database connection
    $con->close();
}



