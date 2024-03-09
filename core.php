<?php
// Start session
session_start();

// Function to check if user is logged in
function is_logged_in() {
    return isset($_SESSION['user_id']) && isset($_SESSION['role_id']);
}
?>
