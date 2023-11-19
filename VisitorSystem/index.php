<?php
    session_start();
    if (isset($_SESSION['STUDENT'])) {
        header('location:student/dashboard/index.php');
    }

    if (isset($_SESSION['ADMIN'])) {
        header('location:admin/dashboard/index.php');
    }

    if (isset($_SESSION['SUPERADMIN'])) {
        header('location:admin/dashboard/index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset ="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
<link rel="stylesheet"  type="text/css" href= "./include/style/Style.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="wrapper">
    <form  method="POST">    

            <div class="input-box">
            <input type="email" placeholder ="Email" name="Email" required>
            <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
            <input type="password" placeholder ="Password" name="Password" required>
            <i class='bx bxs-lock-alt'></i>
            </div>
        
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me </label>
                <a href="forgot_password.php">Forgot password?</a>
            </div>
            
            <button type="submit" class="btn" name="login">Login </a></button>
        
            <div class="register-link">
            <p>Don't have an account? <a href="choose.php">Register</a></p>
            </div>
        
        </form>
    </div>
</body>
</html>
