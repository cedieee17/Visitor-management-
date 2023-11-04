<?php
Session_start();

Require_once './Include/Connect/dbcon.php';

Try {
 $pdoConnect->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST["login"])) {
if (empty($_POST["UserName"]) || empty($_POST[“Password”])) { 
$message = '<label> All fields are required </label>';
 } else {

$pdoQuery = "SELECT * FROM dbtest WHERE UserName :UserName";
$pdoResult = SpdoConnect->prepare($pdoQuery);
$pdoResult->execute(['UserName' => $_POST[“UserName”]]);

$user = SpdoResult->fetch();

If ($user && password_verify($_POST["Password"], $user["Password"])) { 
    $_SESSION["UserName"] = $_POST["UserName"];

$loggedInUser = $_SESSION["UserName"];
$pdoQuery = "INSERT INTO audit_trail('action', 'user') VALUES ('User logged in', :user)"; 
$pdoResult = $pdoConnect->prepare($pdoQuery); 
$pdoResult->execute([':user' => $loggedInUser]);
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
    <form action="login.php" method="post">    
    
       
            <div class="input-box">
            <input type="text" placeholder ="Username" required>
            <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
            <input type="password" placeholder ="Password" required>
            <i class='bx bxs-lock-alt'></i>
            </div>
        
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me </label>
                <a href="forgot_password.php">Forgot password?</a>
            </div>
            
            <button type="submit" class="btn">Login</button>
        
            <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        
        </form>
    </div>
</body>
</html>
