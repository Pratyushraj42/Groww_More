<?php 
include_once "connection.php";
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or wherever you want to after logout
header("Location: stulog.php"); // Replace "login.php" with the actual login page URL
exit();
?>