<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TidyWhisk Home Page</title>
    <link rel="stylesheet" href="../Css/homepage.css">
    <script>
        function redirectToChoreManagementPage(choreStatus) {
            
            var choreManagementPageURL = "../view/chore_management.php";

        
            var redirectURL = choreManagementPageURL + "?status=" + choreStatus;

            window.location.href = redirectURL;
        }
    </script>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="../assests/logo.webp" alt="logo" class="logo">
            <ul>
               
                <li><a href="../view/chore_management.php">Chore-management</a></li>
                <li><a href="../view/addChore.php">Add Chore</a></li>
                <li><a href="../view/assignchore.php">Assign Chore</a></li>
                
          
                <li><a href="../action/logout_user_action.php">Logout</a></li> 
            </ul>
            <div class="chore-statistics">
                <div class="stat-box" onclick="redirectToChoreManagementPage('in-progress')">
                    <h3>In Progress</h3>
                    <p>1</p>
                </div>
                <div class="stat-box" onclick="redirectToChoreManagementPage('incomplete')">
                    <h3>Incomplete</h3>
                    <p>1</p>
                </div>
                <div class="stat-box" onclick="redirectToChoreManagementPage('completed')">
                    <h3>Completed</h3>
                    <p>1</p>
                </div>
                <div class="stat-box" onclick="redirectToChoreManagementPage('in')">
                    <h3>All Chores</h3>
                    <p>3</p>
                </div>
            </div>
        </div>
        <div class="content">
            <h1 id="main-heading" style="color: #009688;">Make your home Tide!</h1>
            <p id="welcome-text" style="color: #009688;">Welcome to TidyWhisk cleaning services<br> Your comfort is our priority</p>
            <div>
                <button type="button">MORE</button>
                <button type="button">LEARN MORE</button>
            </div>
        </div>
    </div>
</body>
</html>
