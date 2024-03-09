<?php
// Include the connection file
include '../settings/connection.php';

// Function to get all chores from the database
function getAllChores() {
    global $conn;
    
    // Initialize variable to store result
    $result = array();
    
    // SQL query to select all chores
    $sql = "SELECT * FROM Chores";
    
    // Execute the query
    $query_result = mysqli_query($conn, $sql);
    
    // Check if execution was successful
    if ($query_result) {
        // Check if any records were returned
        if (mysqli_num_rows($query_result) > 0) {
            // Fetch records and store in result array
            while ($row = mysqli_fetch_assoc($query_result)) {
                $result[] = $row;
            }
        }
    } else {
        // Handle query execution error
        echo "Error: " . mysqli_error($conn);
    }
    
    // Return the result array
    return $result;
}

// Call the function to get all chores
$allChores = getAllChores();

// Output the result (for testing purposes)
print_r($allChores);
?>
