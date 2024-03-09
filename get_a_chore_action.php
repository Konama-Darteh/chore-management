<?php
// Include connection file
include '../settings/connection.php';

// Function to get chore details by ID
function getChoreById($choreId) {
    global $conn;

    // Initialize an empty array to store chore details
    $choreDetails = [];

    // Write the SELECT query to retrieve chore details by ID
    $sql = "SELECT * FROM Chores WHERE chore_id = $choreId";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if execution was successful and if any record was returned
    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch chore details and store them in the $choreDetails array
        $choreDetails = mysqli_fetch_assoc($result);
    }

    // Return the array of chore details
    return $choreDetails;
}
?>

