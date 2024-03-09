<?php
// Include connection file
include '../settings/connection.php';

// Check for GET parameter (chore ID)
if (isset($_GET['cid'])) {
    // Retrieve the chore ID from the GET parameter
    $choreId = $_GET['cid'];

    // Write the DELETE query using the chore ID
    $sql = "DELETE FROM Chores WHERE cid = $choreId";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Redirect to chore control view page after successful deletion
        header("Location: ../Chore_list/Chore_control_view.php");
        exit();
    } else {
        // Handle error 
        echo "Error deleting chore: " . mysqli_error($conn);
    }
} else {
    // Redirect to chore control view page if chore ID is not provided in the URL
    header("Location: ../Chore_list/Chore_control_view.php");
    exit();
}
?>
