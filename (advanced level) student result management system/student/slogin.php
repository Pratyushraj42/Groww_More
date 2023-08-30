<?php
session_start();
include "../phpcode/connection.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs to prevent SQL injection
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query to retrieve user data from the 'registration' table
    $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User authentication successful
        // Redirect to studdash.php
        header("Location: studdash.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid email or password";
    }
}

// Close the database connection
$conn->close();
?>
?>
