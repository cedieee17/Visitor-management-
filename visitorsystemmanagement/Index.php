<?php
Session_start();

Require_once './Include/Connect/dbcon.php';

Try {
 $pdoConnect->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST["login"])) {
if (empty($_POST["Email"]) || empty($_POST["Password"])) { 
$message = '<label> All fields are required </label>';
 } else {

$pdoQuery = "SELECT * FROM student WHERE Email :Email";
$pdoResult = $pdoConnect->prepare($pdoQuery);
$pdoResult->execute(['Email' => $_POST["Email"]]);

$Email = $pdoResult->fetch();

If ($Email && password_verify($_POST["Password"], $Email["Password"])) { 
    $_SESSION["Email"] = $_POST["Email"];

$Email = $_SESSION["Email"];
$pdoQuery = "INSERT INTO audit_trail('Email', 'Description') VALUES ('User logged in', :Email)"; 
$pdoResult = $pdoConnect->prepare($pdoQuery); 
$pdoResult->execute([':Email' => $loggedInUser]);
Header("location:Home.php");
} else {
$message = '<label>Wrong data</label>';
}
}
}
} catch (PDOException $error) {
$message = $error ->getmessage();
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
    <form action="Login.php" method="POST">    

            <div class="input-box">
            <input type="text" placeholder ="Email" name="Email" required>
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
            
            <button type="submit" class="btn" name="login"> <a href="Home.php" >Login </a></button>
        
            <div class="register-link">
            <p>Don't have an account? <a href="Student">Register</a></p>
            </div>
        
        </form>
    </div>
</body>
</html>
