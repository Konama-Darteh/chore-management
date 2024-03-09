<?php
// Include the connection file
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve assignment ID from the URL
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $assignment_id = $_GET['id'];

        // Write your SQL query to delete assignment from the database
        $sql = "DELETE FROM assignments WHERE assignment_id = ?";
        
        // Prepare the statement
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            // Bind parameters
            mysqli_stmt_bind_param($stmt, "i", $assignment_id);
            
            // Execute the statement
            $result = mysqli_stmt_execute($stmt);

            // Check if execution was successful
            if ($result) {
                // Redirect back to assign_chore_view.php
                header("Location: ../assign_chore_view.php");
                exit();
            } else {
                // Display an error message or log the error
                echo "Error: " . mysqli_error($conn);
                // You may redirect or handle the error differently based on your requirements
            }
        } else {
            // Display an error message or log the error
            echo "Error: " . mysqli_error($conn);
            // You may redirect or handle the error differently based on your requirements
        }
    } else {
        // Invalid assignment ID, handle the error (redirect, display message, etc.)
        header("Location: ../assign_chore_view.php?error=invalid_id");
        exit();
    }
} else {
    // Redirect to assignment display page if accessed directly
    header("Location: ../assign_chore_view.php");
    exit();
}
?>
