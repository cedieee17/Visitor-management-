<?php
session_start();

require_once 'Include/Connect/dbcon.php';

try {
    $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST["login"])) {
        if (empty($_POST["Email"]) || empty($_POST["Password"])) {
            $message = '<label>All fields are required</label>';
        } else {
            $pdoQuery = "SELECT * FROM student WHERE Email = :Email";
            $pdoResult = $pdoConnect->prepare($pdoQuery);
            $pdoResult->execute(['Email' => $_POST["Email"]]);

            $user = $pdoResult->fetch();

            if ($user || password_verify($_POST["Password"], $user["Password"])) {
                $_SESSION["Email"] = $user["Email"];


                $loggedInUser = $_SESSION["Email"];
                $pdoQuery = "INSERT INTO audit_trail (Email, Description) VALUES (:Email, 'User logged in')";
                $pdoResult = $pdoConnect->prepare($pdoQuery);
                $pdoResult->execute([':Email' => $loggedInUser]);

                header("Location: Home.php");
                exit();
            } else {
                $message = '<label>Wrong email or password</label>';
            }
        }
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
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
