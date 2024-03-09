<?php
// Include core.php to access is_logged_in() function
include '../settings/core.php';

// Check if user is not logged in, redirect to login page
if (!is_logged_in()) {
    header("Location: ../Login/login_view.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Chores</title>
    <link rel="stylesheet" href="../Css/addchore.css">
</head>
<body>
    <ul class="homelogo">
        <li><a href="../view/homepage.php">Home</a></li>
    </ul>
    <div class="container">
        <h2>Add Chores</h2>
        <form method="POST" name="addChoreForm" id="addChoreForm" action="../action/addChore_action.php">
            <label for="choreName">Chore Name:</label>
            <input type="text" name="choreName" id="choreName" placeholder="Enter chore name" required>
            <button type="submit" name="addChoreBtn" id="addChoreBtn">Add Chore</button>
        </form>
    </div>
    <script>
        document.getElementById('addChoreForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const choreName = document.getElementById('choreName').value.trim();
            const isValidChore = /^[a-zA-Z\s]+$/.test(choreName);
            
            if (!isValidChore) {
                alert('Chore name must contain only letters.');
                return;
            }
            this.submit();
        });
    </script>
</body>
</html>

