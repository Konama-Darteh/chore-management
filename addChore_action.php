<?php 
   include '../settings/core.php';
   include '../settings/connection.php';
      
   // Check if form is submitted
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Retrieve chore name from the form
       $choreName = mysqli_real_escape_string($conn, $_POST['choreName']);
       
       // Insert chore into database
       $sql = "INSERT INTO Chores (chorename) VALUES ('$choreName')";
       if (mysqli_query($conn, $sql)) {
           // Redirect back to chore_control_view.php after successful add
           header("Location: ../Chore_list/Chore_control_view.php");
           exit();
       } else {
           // Handle error appropriately (e.g., display error message)
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
   } else {
       // Redirect to appropriate page if form is not submitted
       header("Location: ../view/addChore.php");
       exit();
   }
   ?>
   
      



?>