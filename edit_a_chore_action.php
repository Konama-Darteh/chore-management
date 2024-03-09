<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Chore</title>
    <link rel="stylesheet" href="../Css/addChore.css">
</head>
<body>
    <h2>Edit Chore</h2>
    <?php
    // Include connection.php for database connection
    include '../settings/connection.php';

    // Check if chore ID is provided in the URL
    if(isset($_GET['cid'])) {
        $choreId = $_GET['cid'];

        // Check if form is submitted via POST method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve updated chore name from the form
            $updatedChoreName = mysqli_real_escape_string($conn, $_POST['choreName']);

            // Write the UPDATE query to update the chore name
            $sql = "UPDATE Chores SET chorename = '$updatedChoreName' WHERE cid = $choreId";

            // Execute the query
            if (mysqli_query($conn, $sql)) {
                // Redirect to chore control view page after successful update
                header("Location: ../Chore_list/Chore_control_view.php");
                exit();
            } else {
                // Handle error appropriately (e.g., display error message)
                echo "Error updating chore: " . mysqli_error($conn);
            }
        }

        // Fetch chore details from the database
        $sql = "SELECT * FROM Chores WHERE cid = $choreId";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>
            <form method="POST" action="edit_a_chore_action.php?cid=<?php echo $choreId; ?>">
                <label for="choreName" style="color: green;">New Chore Name:</label>
                <input type="text" id="choreName" name="choreName" value="<?php echo $row['chorename']; ?>" required>
                <button type="submit">Update Chore</button>
            </form>
            <?php
        } else {
            echo "Chore not found.";
        }
    } else {
        echo "Chore ID not provided.";
    }
    ?>
    
</body>
</html>
