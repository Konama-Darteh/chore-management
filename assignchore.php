<?php
// Include core.php for session checking
include '../settings/core.php';

// Check if user is logged in, if not, redirect to login page
if (!is_logged_in()) {
    header("Location: ../Login/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Chore</title>
    <link rel="stylesheet" href="../Css/assignchore.css">
</head>
<body>
    <h2>Assign Chore</h2>
    <!-- Form for assigning a chore -->
    <form action="../actions/assign_a_chore_action.php" method="POST" id="assignChoreForm">
        <label for="user">Select User:</label>
        <select name="user" id="user" required>
            <!-- Populate options dynamically from database -->
            <?php include '../functions/select_role_fxn.php'; ?>
        </select>
        <br>
        <label for="chore">Select Chore:</label>
        <select name="chore" id="chore" required>
            <!-- Populate options dynamically from database -->
            <?php include '../functions/select_chore_fxn.php'; ?>
        </select>
        <br>
        
        <br>
        <label for="due_date">Due Date:</label>
        <input type="date" id="due_date" name="due_date" required>
        <br>
        <button type="submit">Assign Chore</button>
    </form>
    <p><a href="logout_view.php">Logout</a></p>
</body>
</html>
