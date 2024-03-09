<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to TidyWhisk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/loginstyle.css">
</head>
<body background="ChoresProject/clean.jpeg">
    
    <div class="login-container">

        <div class="login-page">
            <img src="../assets/logo.webp" alt="Logo" class="logo">
            <div class="login-title">
                <h1 class="display-4">Welcome to TidyWhisk</h1>
                <p class="lead">Today will be great!</p>
            </div>
            <form class="login-form" action="../action/login_user_action.php" method="POST">
                <div class="username">
                    <input type="text" class="form-input" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="password">
                    <input type="password" class="form-input" id="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="login" >Login</button>
                <p class="register-link">Don't have an account? <a href="../Login/register_view.php">Register</a></p>
            </form>    
        </div>        
    </div>

</body>
</html>
