<?php
// Include core.php for session checking
include '../settings/core.php';

// Check if user is logged in, if not, redirect to login page
if (!is_logged_in()) {
    header("Location: .../Login/login.php");
    exit();
}

// Check if chore ID is provided in the URL
if (isset($_GET['id'])) {
    // Retrieve the chore ID from the URL
    $choreId = $_GET['id'];
    // Include get_a_chore_action.php file
    include '../action/get_a_chore_action.php';
    // Call the function to get the chore details by ID and store the output in a variable
    $choreDetails = getChoreById($choreId);
} else {
    // Redirect to chore control view page if chore ID is not provided in the URL
    header("Location: ../Chore_list/Chore_control_view.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Chore</title>
    <link rel="stylesheet" href="../Css/addChore.css">
</head>
<body>
    <div class="container">
        <h2>Edit Chore</h2>
        <!-- Form to edit the chore -->
        <form method="POST" action="../action/edit_a_chore_action.php">
            <input type="hidden" name="choreId" value="<?php echo $choreDetails['cid']; ?>">
            <label for="choreName">Chore Name:</label>
            <input type="text" name="choreName" id="choreName" value="<?php echo $choreDetails['chorename']; ?>" required>
            <button type="submit" name="editChoreBtn">Update Chore</button>
        </form>
    </div>
</body>
</html>
