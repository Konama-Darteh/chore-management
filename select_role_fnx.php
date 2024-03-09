<?php
// Include the connection file
include '../settings/connection.php';

// Function to get family roles from the database
    
$roles = array();
    
    // Check if the connection is not valid
    // SQL query to select family roles
$sql = "SELECT * FROM family_name";
    
    // Execute the query
$result = mysqli_query($conn, $sql);
    
    // Check if execution was successful
if ($result) {
        // Fetch associative array of roles
    while ($row = mysqli_fetch_assoc($result)) {
        $roles[] = $row;
    }
} 


