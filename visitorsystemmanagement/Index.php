<?php
Session_start();

Require_once './Include/Connect/dbcon.php';

Try {
 $pdoConnect->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST["login"])) {
if (empty($_POST["UserName"]) || empty($_POST[“Password”])) { 
$message = '<label> All fields are required </label>';
 } else {

$pdoQuery "SELECT * FROM dbtest WHERE UserName :UserName";
$pdoResult SpdoConnect->prepare($pdoQuery);
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
$message = error ->get message();
}


?>
<!DOCTYPE html>
<html>
<head>
<title>PHP PDO Simple Login</title>
<link rel=”stylesheet” type=”text/css” href=”./Include/Styles/Styles.css”>
</head>
<body>
<br />
<div style=”width:500px;”>

<?php

If (isset($message)) {
Echo '<label>'.$message.'</label>';
}
?>
<h3 Align=””>PHP PDO Simple Login</h3><br/>
<form method=”post”>
Username
<input type=”text” name=”UserName”>
<br />
Password
<input type=”password” name=”Password”> <!—Use type=”password” for password input 
<br />
<input type="submit" name="login" value=”Login”>
</form>
<a href=”register.php”> Add user</a>
</div>
<br>
</body>
</html>