<?php
// Include the connection file
include '../settings/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $familyRole = $_POST['familyRole'];
    $chore = $_POST['chore'];

    // Perform necessary validations
    if (empty($familyRole) || empty($chore)) {
        // Redirect back to assign_chore_view.php with an error message
        header("Location: ../assign_chore_view.php?error=empty_fields");
        exit();
    }

    // Check if the family role is either "mother" or "father"
    if ($familyRole != 'mother' && $familyRole != 'father') {
        // Redirect back to assign_chore_view.php with an error message
        header("Location: ../assign_chore_view.php?error=invalid_role");
        exit();
    }

    // Write your SQL query to insert assignment into the database
    $sql = "INSERT INTO assignments (family_role_id, chore_id) VALUES (?, ?)";
    
    // Prepare the statement
    $stmt = mysqli_prepare($conn, $sql);
    
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "ii", $familyRole, $chore);
    
    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    // Check if execution was successful
    if ($result) {
        // Redirect back to assign_chore_view.php
        header("Location: ../view/assign_chore_view.php");
        exit();
    } else {
        // Display an error message or log the error
        echo "Error: " . mysqli_error($conn);
        // You may redirect or handle the error differently based on your requirements
    }
} else {
    // Redirect to chore display page if accessed directly
    header("Location: ../view/assign_chore_view.php");
    exit();
}
?>
