<?php
// Start session
session_start();

// Include the connection file
include '../settings/connection.php';

// Check if form was submitted
if (!empty($_POST)) {
    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch the record including the family role
    $stmt = $conn->prepare("SELECT pid, fid, passwd FROM People WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $user = $stmt->get_result();

    // Fetch user data
    $userData = $user->fetch_assoc();

    // Verify password
    if (password_verify($password, $userData['passwd'])) {
        // Set session variables
        $_SESSION['user_id'] = $userData['pid'];
        $_SESSION['role_id'] = $userData['fid']; // Assuming fid represents the family role ID

        // Determine the redirection based on the user's family role
        switch ($userData['fid']) {
            case 1: // Father
            case 2: // Mother
                // Redirect to the parent dashboard
                header("Location: ../view/homepage.php");
                exit();
                break;
            default:
                // Redirect to the user dashboard
                header("Location: ../view/welcomePage.php");
                exit();
        }
    } else {
        // Provide appropriate response for incorrect username or password
        $errorMessage = "Incorrect username or password. Please try again.";
        echo $errorMessage;
        header("Location: ../Login/login_view.php");
    }
}
?>
