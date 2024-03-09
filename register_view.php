<?php
// Include the select_role_fxn.php file from the functions folder
include '../functions/select_role_fnx.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register for TidyWhisk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/loginstyle.css">
</head>
<body>
    <script defer src="./ChoresProject/registerValidation.js"></script>
    
    <div class="register-container">
        <div class="register-page">
            <div class="register-header">
                <img src="../assests/logo.webp" alt="Logo" class="logo">
                <div class="register-title">
                    <h1 class="display-4">Register Now!</h1>
                    <p class="lead">Create your TidyWhisk account</p>
                </div>
            </div>
            <form class="register-form" method="post" name="registrationForm" id="registrationForm" action="../action/register_user_action.php">
                <div class="firstName">
                    <input type="text" class="form-input" id="firstName" name="firstName" placeholder="First Name" required>
                    <div class="error"></div>
                </div>
                <div class="lastName">
                    <input type="text" class="form-input" id="lastName" name="lastName" placeholder="Last Name" required>
                    <div class="error"></div>
                </div>
                <div class="info">
                    <label for="gender">Gender:</label>
                    <input type="radio" id="male" name="gender" value="0" required>
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="1" required>
                    <label for="female">Female</label>
                    <div class="error"></div>
                </div>
                <div class="family">
                    <label for="familyRole">Family Role:</label>
                    <select id="familyRole" name="familyRole" required>
                        <?php foreach ($roles as $role) : ?>
                        <option value="<?php echo $role['fid']; ?>">
                            <?php echo $role['fam_name']; ?>
                        </option>
                       <?php endforeach; ?>
                </select>

                    </select>
                    <div class="error"></div>
                </div>
                <div class="dob">
                    <input type="date" class="form-input" id="dob" name="dob" placeholder="Date of Birth" required>
                    <div class="error"></div>
                </div>
                <div class="phone">
                    <input type="tel" class="form-input" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required>
                    <div class="error"></div>
                </div>
                <div class="email">
                    <input type="email" class="form-input" id="email" name="email" placeholder="Email" required>
                    <div class="error"></div>
                </div>
                <div class="password">
                    <input type="password" class="form-input" id="password" name="password" placeholder="Password" required>
                    <div class="error"></div>
                </div>
                <div class="retype">
                    <input type="password" class="form-input" id="passwordRetype" name="passwordRetype" placeholder="Retype Password" required>
                    <div class="error"></div>
                </div>
                <button type="submit" class="register" id="registerButton" name="registerButton">Register</button>
            </form>
            <p class="login-link">Already have an account? <a href="login_view.php">Login</a></p>
        </div>
    </div>

</body>
</html>
