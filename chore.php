<?php
// Start session if not already started
session_start();

// Function to check login status
function checkLogin() {
    // Check if user ID session exists
    if (!isset($_SESSION['user_id'])) {
        // Redirect to login page
        header("Location: login.php");
        // Terminate script execution after redirection
        die();
    }
}

// Call the function to check login status
checkLogin();
?>