<?php
// Include the connection file
include '../settings/connection.php';


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and assign each to a variable and remove special characters
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $role = mysqli_real_escape_string($conn, $_POST['familyRole']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $rid = 3;
    
    // Encrypt the password using the password_hash function and store the hashed version in a variable
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    
    // Write your INSERT query using the variables above
    $query = "INSERT INTO People (rid, fid, fname, lname, gender, dob, tel, email, passwd) VALUES ('$rid','$role', '$firstName', '$lastName','$gender','$dob','$phoneNumber','$email','$hashedPassword')";

    // Use a default number of "3" for the rid field/column in the "People" table
    
    
    echo "this is a  3 try";
    $result = mysqli_query($conn, $query);
    var_dump($result);

    // Execute the query
    if ($result) {
        // Redirect to login_view page if execution is successful
        header("Location: ../Login/login_view.php");
    } else {
        // If execution fails, display error on register_view page
        echo "Error: " . $conn->error;
    }                            
} else {
    // If the form is not submitted, redirect back to the register_view page
    header("Location: ../Login/register_view.php");
    exit();
}
?>
