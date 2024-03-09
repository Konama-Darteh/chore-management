<?php
// Include core.php for session checking and database connection
include '../settings/core.php';
include '../settings/connection.php';

// Check if user is logged in, if not, redirect to login page
if (!is_logged_in()) {
    header("Location: ../Login/login.php");
    exit();
}

// Retrieve chore statistics from the database (example)
// You need to write SQL queries to fetch these statistics based on your database schema
$inProgressCount = 1; 
$incompleteCount = 1; 
$completedCount = 1;
$total = 3; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to TidyWhisk</title>
    <link rel="stylesheet" href=" ../Css/welcome.css">
</head>
<body>
    <h1>Welcome to TidyWhisk!</h1>
    
    <div class="statistics">
        <div class="box" onclick="window.location.href = '../view/chore_management.php';">
            <h2>In Progress</h2>
            <p><?php echo $inProgressCount; ?> chores</p>
        </div>
        <div class="box" onclick="window.location.href = '../view/chore_management.php';">
            <h2>Incomplete</h2>
            <p><?php echo $incompleteCount; ?> chores</p>
        </div>
        <div class="box" onclick="window.location.href = '../view/chore_management.php';">
            <h2>Completed</h2>
            <p><?php echo $completedCount; ?> chores</p>
        </div>
    </div>

   

</body>
</html>
